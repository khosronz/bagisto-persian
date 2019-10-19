<?php

namespace Webkul\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Category\Database\Seeders\DatabaseSeeder as CategorySeeder;
use Webkul\Attribute\Database\Seeders\DatabaseSeeder as AttributeSeeder;
use Webkul\Core\Database\Seeders\DatabaseSeeder as CoreSeeder;
use Webkul\Core\Database\Seeders\LocalesTableSeeder as LocalesSeeder;
use Webkul\Core\Database\Seeders\CurrencyTableSeeder as CurrenciesSeeder;
use Webkul\Core\Database\Seeders\ChannelTableSeeder as ChannelsSeeder;
use Webkul\User\Database\Seeders\DatabaseSeeder as UserSeeder;
use Webkul\Customer\Database\Seeders\DatabaseSeeder as CustomerSeeder;
use Webkul\Inventory\Database\Seeders\DatabaseSeeder as InventorySeeder;
use Webkul\CMS\Database\Seeders\DatabaseSeeder as CMSSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LocalesSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(ChannelsSeeder::class);
        $this->call(CoreSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CMSSeeder::class);
    }
}