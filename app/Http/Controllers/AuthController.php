<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function createPermission(){

         $admin = Role::where('name', 'admin');
         $createPermission = Permission::where('name', 'create-post');
         $admin->attachPermission($createPermission);
         dd('Success.');
   
    }

}