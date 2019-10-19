<?php

namespace Webkul\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocalesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('channels')->delete();

        DB::table('locales')->delete();

        DB::table('locales')->insert([
            [
                'id' => 1,
                'code' => 'en',
                'name' => 'English',
                'direction' => 'ltr',
            ], [
                'id' => 2,
                'code' => 'fr',
                'name' => 'French',
                'direction' => 'ltr',
            ], [
                'id' => 3,
                'code' => 'fa',
                'name' => 'ایران',
                'direction' => 'rtl',
            ]
        ]);
    }
}