<?php
use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Permission;
class DefaultAdminSeeder extends Seeder {
    public function run() {
       	//1) Create Admin Role
        $role = ['name' => 'admin', 'display_name' => 'Admin', 'description' => 'Full Permission'];
        $role = DB::table('roles')->insert([$role]);
        //2) Set Role Permissions
        // Get all permission, swift through and attach them to the role
        $permission = Permission::get();
        foreach ($permission as $key => $value) {
        	$permissionRole = ['permission_id' => $value->id, 'role_id' => 1];
        	DB::table('permission_role')->insert([$permissionRole]);
        }
        //3) Create Admin User
        $user = [
        	'name' => 'Admin', 
        	'email' => 'admin@gmail.com', 
        	'password' => Hash::make('adminpwd'), 
        	'email_verified_at'    => date("Y-m-d h:i:s"),
            'created_at'    => date("Y-m-d h:i:s"), 
            'updated_at'    => date("Y-m-d h:i:s")
        ];
        $user = DB::table('users')->insert([$user]);
        //4) Set User Role
        $roleUser = ['user_id' => 1, 'role_id' => 1];
        DB::table('role_user')->insert([$roleUser]);
    }
}