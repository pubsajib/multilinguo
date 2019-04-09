<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
                'name'          => 'Student 01',
                'email'         => 'student_01@gmail.com',
                'password'      => bcrypt('12345678'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'Student 02',
                'email'         => 'student_02@gmail.com',
                'password'      => bcrypt('12345678'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'Student 03',
                'email'         => 'student_03@gmail.com',
                'password'      => bcrypt('12345678'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ],
            [
                'name'          => 'Teacher 01',
                'email'         => 'teacher_01@gmail.com',
                'password'      => bcrypt('12345678'), 
                'email_verified_at'    => date("Y-m-d h:i:s"),
                'created_at'    => date("Y-m-d h:i:s"), 
                'updated_at'    => date("Y-m-d h:i:s")
            ]
        ]);
    }
}