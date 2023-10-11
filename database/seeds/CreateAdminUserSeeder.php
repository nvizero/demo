<?php


use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['admin'];
        $role = Role::create(['name' => 'Admin']);
        foreach ($users as $name) {
            $user = User::create([
                'username' => $name . 'TT',
                'email' => $name . '@gmail.com',
                'password' => bcrypt('123456'),
                'sort' => 0,
                'google2fa_token'=>'',
            ]);
            $permissions = Permission::pluck('id', 'id')->all();

            $role->syncPermissions($permissions);

            $user->assignRole([$role->id]);
        }
    }
}
