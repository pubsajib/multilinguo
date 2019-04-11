<?php
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {
    public function run() {
        DB::table('roles')->insert([
            ['name' => 'teacher', 'display_name' => 'Teacher', 'description' => 'Teachers Permission'],
            ['name' => 'student', 'display_name' => 'Student', 'description' => 'Students Permission'],
        ]);
    }
}
