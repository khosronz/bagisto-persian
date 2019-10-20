<?php

namespace Webkul\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ChannelTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('channels')->delete();

        DB::table('channels')->insert([
                'id' => 1,
                'code' => 'default',
                'name' => 'Default',
                'root_category_id' => 1,
                'home_page_content' => '<p>@include("shop::home.slider") @include("shop::home.featured-products") @include("shop::home.new-products")</p><div class="banner-container"><div class="left-banner"><img src={{asset("themes/default/assets/images/a1.png")}} /></div><div class="right-banner"><img src={{asset("themes/default/assets/images/a2.png")}} /> <img src={{asset("themes/default/assets/images/a3.png")}} /></div></div>',
                'footer_content' => '<div class="list-container"><span class="list-heading">لینک های سریع</span><ul class="list-group"><li><a href="@php echo route("shop.cms.page", "about-us") @endphp">درباره ما</a></li><li><a href="@php echo route("shop.cms.page", "return-policy") @endphp">سیاست بازگشت</a></li><li><a href="@php echo route("shop.cms.page", "refund-policy") @endphp">سیاست بازپرداخت</a></li><li><a href="@php echo route("shop.cms.page", "terms-conditions") @endphp">شرایط و ضوابط</a></li><li><a href="@php echo route("shop.cms.page", "terms-of-use") @endphp">شرایط استفاده</a></li><li><a href="@php echo route("shop.cms.page", "contact-us") @endphp">ارتباط با ما</a></li></ul></div><div class="list-container"><span class="list-heading">با ما در ارتباط باشید</span><ul class="list-group"><li><a href="#"><span class="icon icon-facebook"></span>فیسبوک </a></li><li><a href="#"><span class="icon icon-twitter"></span> توییتر </a></li><li><a href="#"><span class="icon icon-instagram"></span> اینستاگرام </a></li><li><a href="#"> <span class="icon icon-google-plus"></span>گوگل پلاس </a></li><li><a href="#"> <span class="icon icon-linkedin"></span>لینکداین </a></li></ul></div>',
                'name' => 'Default',
                'default_locale_id' => 3,
                'base_currency_id' => 2
            ]);

        DB::table('channel_currencies')->insert([
            [
                'channel_id' => 1,
                'currency_id' => 2,
            ]
        ]);

        DB::table('channel_locales')->insert([
                'channel_id' => 1,
                'locale_id' => 3,
            ]);

        DB::table('channel_inventory_sources')->insert([
                'channel_id' => 1,
                'inventory_source_id' => 1,
            ]);
    }
}