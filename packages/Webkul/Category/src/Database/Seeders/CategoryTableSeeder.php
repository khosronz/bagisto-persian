<?php

namespace Webkul\Category\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();

        $now = Carbon::now();

        DB::table('categories')->insert([
            ['id' => '1','name'=>'Root','position' => '1','image' => NULL,'status' => '1','_lft' => '1','_rgt' => '14','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['id' => '2','name'=>'Server Ping','position' => '1','image' => NULL,'status' => '1','_lft' => '1','_rgt' => '14','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['id' => '3','name'=>'Speed Page','position' => '1','image' => NULL,'status' => '1','_lft' => '1','_rgt' => '14','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
            ['id' => '4','name'=>'Change IP Address (NS Monitoring)','position' => '1','image' => NULL,'status' => '1','_lft' => '1','_rgt' => '14','parent_id' => NULL, 'created_at' => $now, 'updated_at' => $now],
        ]);

        DB::table('category_translations')->insert([
            ['name' => 'Root','slug' => 'root','description' => 'Root','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '1','locale' => 'en'],
            ['name' => 'Server Ping','slug' => 'server-ping','description' => 'Server Ping','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '2','locale' => 'en'],
            ['name' => 'Speed Page','slug' => 'speed-page','description' => 'Speed Page','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '3','locale' => 'en'],
            ['name' => 'Change IP Address','slug' => 'server-ping','description' => 'Speed Page','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '4','locale' => 'en'],
        ]);

        DB::table('category_translations')->insert([
            ['name' => 'ریشه','slug' => 'root','description' => 'دسته ریشه','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '1','locale' => 'fa'],
            ['name' => 'سرور پینگ','slug' => 'server-ping','description' => 'پینگ سرور یا هاست','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '2','locale' => 'fa'],
            ['name' => 'سرعت صفحه','slug' => 'speed-page','description' => 'بررسی سرعت صفحه','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '3','locale' => 'fa'],
            ['name' => 'بررسی تغییر آدرس آی پی','slug' => 'ns-monitoring','description' => 'بررسی تغییر آدرس آی پی (مانیتورینگ دامنه)','meta_title' => '','meta_description' => '','meta_keywords' => '','category_id' => '4','locale' => 'fa'],
        ]);
    }
}