<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Md. Admin',
            'role_id' => '1',
            'user_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rootadmin')
        ]);
        DB::table('users')->insert([
            'name' => 'Md. Author',
            'role_id' => '2',
            'user_name' => 'Author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('rootauthor')
        ]);
    }
}
