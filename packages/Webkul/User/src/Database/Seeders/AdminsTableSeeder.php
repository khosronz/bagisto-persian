<?php

namespace Webkul\User\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->insert([
                'id' => 1,
                'name' => 'Example',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'),
                'status' => 1,
                'role_id' => 1,
            ]);

        DB::table('admins')->insert([
            'id' => 2,
            'name' => 'Khosro Nazari',
            'email' => 'khosronz@gmail.com',
            'password' => bcrypt('1qaz!QAZ'),
            'status' => 1,
            'role_id' => 1,
        ]);
    }
}
