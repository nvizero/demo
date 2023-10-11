<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use PragmaRX\Google2FAQRCode\Google2FA;

class UserController extends DashboardController
{
    public string $main = 'users';

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:users-list|users-create|users-edit|users-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:users-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:users-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:users-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['main'] = $this->main;
        $data['users'] = User::orderBy('id', 'DESC')->paginate(10);
        return view('backend.users.index', $data)
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['main'] = $this->main;
        $data['roles'] = Role::pluck('name', 'name')->all();
        return view('backend.users.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
        ]);
        $input = $request->all();
        $user = User::create($input);
        $user->password = Hash::make($input['password']);
        $user->assignRole($request->input('roles'));
        $user->save();
        return redirect()->route('users.index')
            ->with('success',  __('users.title') . __('default.created_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['main'] = $this->main;
        $data['user'] = User::find($id);
        return view('backend.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['main'] = $this->main;
        $user = User::find($id);
        $data['user'] = $user;
        $data['roles'] = Role::pluck('name', 'name')->all();
        $data['userRole'] = $user->roles->pluck('name', 'name')->all();
        return view('backend.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = $request->except(['_token', '_method', 'id', 'password']);
            // $input = array_except($input, array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', __('users.title') . __('default.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', __('users.title') . __('default.deleted_successfully'));
    }

    public function google2faSet($id)
    {
        $google2fa = new Google2FA();

        $secret = $google2fa->generateSecretKey();

        $updateDate = [
            'google2fa_token' => $secret
        ];

        User::query()
            ->where('id', $id)
            ->update($updateDate);

        return redirect(route('users.index'));
    }
}
