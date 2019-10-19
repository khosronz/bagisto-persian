<?php

namespace Webkul\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CurrencyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('channels')->delete();

        DB::table('currencies')->delete();

        DB::table('currencies')->insert([
            'id' => 1,
            'code' => 'USD',
            'name' => 'US Dollar'
        ]);

        DB::table('currencies')->insert([
            'id' => 2,
            'code' => 'IRR',
            'name' => 'تومان'
        ]);
    }
}