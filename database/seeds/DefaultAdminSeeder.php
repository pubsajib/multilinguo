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
        //3) Create Admin User
        $user = [
        	'name' => 'Admin', 
        	'email' => 'admin@gmail.com', 
            'role_id' => 1, 
        	'password' => Hash::make('12345678'), 
        	'email_verified_at'    => date("Y-m-d h:i:s"),
            'created_at'    => date("Y-m-d h:i:s"), 
            'updated_at'    => date("Y-m-d h:i:s")
        ];
        $user = DB::table('users')->insert([$user]);
    }
}