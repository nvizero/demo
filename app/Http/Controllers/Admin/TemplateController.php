<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\RequestService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TemplateController extends DashboardController
{
    function __construct()
    {
        $this->middleware("permission:$this->main-list|$this->main-create|$this->main-edit|$this->main-delete", ["only" => ["index", "show"]]);
        $this->middleware("permission:$this->main-create", ["only" => ["create", "store"]]);
        $this->middleware("permission:$this->main-edit", ["only" => ["edit", "update"]]);
        $this->middleware("permission:$this->main-delete", ["only" => ["destroy"]]);
    }
    //基本設定 
    public function default()
    {
        $data['main'] = $this->main;
        $data['fieldsSetting'] = $this->fieldsSetting;
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->default();
        $data['page_show'] = strtolower(__FUNCTION__);
        $all = array_filter($this->request->all());
        if ($all) {
            $search = $this->requestService->search($this->fieldsSetting, $this->request);
            $data['objs'] = $this->entity->where($search)->sortable()->paginate(10);
        } else {
            $BigWords = ['scripts'];
            if (in_array($this->main, $BigWords)) {
                $data['objs'] = $this->entity->sortable()->paginate(10);
            } else {
                $data['objs'] = $this->entity->orderBy('id', 'asc')->sortable()->paginate(10);
            }
        }

        return view('backend.template.index', $data)
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->default();
        $data['page_show'] = strtolower(__FUNCTION__);
        return view('backend.template.create', $data);
    }
    // 資料 寫入/更新 
    public function preDBPress($fieldsSetting, $request, $entity, $main)
    {
        $this->requestService = new RequestService();
        $inputAll = $request->except(['_token', '_method', 'id', 'files']);
        //必填        
        $required = $this->requestService->isRequired($fieldsSetting);
        request()->validate($required);

        //checkbox 問題修正
        $inputChkbox = $this->requestService->fieldsCheckbox($fieldsSetting, $request);
        //是否有檔案上傳 
        $inputFiles = $this->requestService->fieldsHasFile($fieldsSetting);
        //圖片上傳
        $imageData = $this->requestService->imgService($inputFiles, $request);

        $allDatas = $this->requestService->collectData($inputAll, $inputChkbox, $imageData);

        if ($request->input('id') > 0) {
            //更新
            $entity = $entity->find($request->input('id'));
            $r = json_decode($entity, true);
            if (isset($r['text_attr']) || isset($r['radio_attr']) || isset($r['checkbox_attr'])) {
                $entity->text_attr = '';
                $entity->radio_attr = '';
                $entity->checkbox_attr = '';
                $entity->save();
            }
        }

        foreach ($allDatas as $data => $val) {
            if (is_array($val)) {
                $entity->$data = "," . join(",", $val);
            } else {
                $entity->$data = $val;
            }
        }
        $entity->save();
        //等級
        //多圖片上傳
        $this->requestService->multiImgService($request, $entity, $fieldsSetting, $main);

        if(array_key_exists('parse_qrcode',$fieldsSetting) && array_key_exists('qrcode',$fieldsSetting) && $request->hasFile('qrcode')){
          //上傳qrcode
          $path = $this->requestService->uploadQrcode($request, $entity);
          //上傳qrcode解析
          $this->requestService->parseQrcode($path, $entity);
        }

        //動態選單
        if($main=='aforms'){
            // 处理 DELETE 请求
          DB::statement('ALTER TABLE getform ADD '.$request->val.' VARCHAR(255)');
        }
        return $entity;
    }

    //等級 
    public function calcLevel($inputAll){
      
      if($inputAll['parent_id']==0){
        return 1;
      }
      $res = DB::table($this->main)->where('id',$inputAll['parent_id'])->first();
      return (int)$res->level+1;
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //必填設定 
        self::preDBPress($this->fieldsSetting, $this->request, $this->entity, $this->main);

        //level
        if($this->request->input('level')>0){
          $inputAll = $this->request->except(['_token', '_method','id', 'files']);
          $level = self::calcLevel($inputAll);
          $max = $this->fieldsSetting['level']['max'];
          if($level<$max){
            $this->entity->level = $level;
            $this->entity->save();
            return redirect()->route("$this->main.index")
                ->with('success', __("$this->main.title") . __('default.created_successfully'));
          }else{
            $this->entity->delete();
            return redirect()->route("$this->main.index")
                ->with('error', __("$this->main.title") . __('default.created_faild',['max'=>$max-1]));
          }
        }else{
          return redirect()->route("$this->main.index")
              ->with('success', __("$this->main.title") . __('default.created_successfully'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->default();
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['obj'] = $this->entity->find($id);
        return view('backend.template.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->default();
        $data['page_show'] = strtolower(__FUNCTION__);
        $data['obj'] = $this->entity->find($id);
        return view('backend.template.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        self::preDBPress($this->fieldsSetting, $this->request, $this->entity, $this->main);
        return redirect()->route("$this->main.index")
            ->with('success', __("$this->main.title") . __('default.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->entity = $this->entity->find($id);
        if($this->main=='aforms'){
            // 处理 DELETE 请求
          DB::statement('ALTER TABLE getform DROP COLUMN '.$this->entity->val.'; ');
        }
        $this->entity->delete();
        return redirect()->route("$this->main.index")
            ->with('success',  __("$this->main.title") . __('default.deleted_successfully'));
    }

    public function remove_image(Request $request)
    {
        $id = $request->input('id');
        $main = $request->input('main');
        $name = $request->input('name');
        $imgPath = $request->input('path');
        $type = $request->input('type');
        if ($type == 'key') {
            DB::table($main)->where('key', $id)->update(["$name" => '']);
                return 1;
        } else {
      Storage::delete($imgPath);
      if($main=="semicMains"){
     $main="semic_mains"; 
      }
                DB::table($main)->where('id', $id)->update(["$name" => '']);
                return 1;
            
        }
    }

    //
    public function delimage(Request $request)
    {
        $id = $request->input('id');
        $main = $request->input('main');
        $tables = ["marketAdvertisings",  "postAdvertisings", "businesses"];
        if (in_array($main, $tables)) {
            DB::table('advertising_imgs')->where('id', $id)->delete();
            return 1;
        } else {
            return 0;
        }
    }
}
