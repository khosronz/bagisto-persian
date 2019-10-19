<?php

namespace Webkul\CMS\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CMSPagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cms_pages')->delete();

        DB::table('cms_pages')->insert([
            [
                'id' => '1',
                'url_key' => 'about-us',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">About us page content</div>
                                   </div>',
                'page_title' => 'درباره ما',
                'meta_title' => 'درباره ما',
                'meta_description' => '',
                'meta_keywords' => 'aboutus',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">About us page content</div>\r\n</div>",
                            "meta_title": "درباره ما",
                            "page_title": "درباره ما",
                            "meta_keywords": "aboutus ", "meta_description": "ارائه دهنده سرویس مانیتورینگ سرور و تجهیزات شبکه"}',
                'channel_id' => 1,
                'locale_id' => 3
            ], [
                'id' => '2',
                'url_key' => 'return-policy',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">Return policy page content</div>
                                   </div>',
                'page_title' => 'خط مشی بازگشت',
                'meta_title' => 'خط مشی بازگشت',
                'meta_description' => '',
                'meta_keywords' => 'return, policy',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">Return policy page content</div>\r\n</div>",
                            "meta_title": "خط مشی بازگشت",
                            "page_title": "خط مشی بازگشت",
                            "meta_keywords": "return, policy ", "meta_description": ""}',
                'channel_id' => 1,
                'locale_id' => 3
            ], [
                'id' => '3',
                'url_key' => 'refund-policy',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">محتوای صفحه سیاست بازپرداخت</div>
                                   </div>',
                'page_title' => 'سیاست بازپرداخت',
                'meta_title' => 'سیاست بازپرداخت',
                'meta_description' => '',
                'meta_keywords' => 'بازپرداخت ، سیاست',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">Refund policy page content</div>\r\n</div>",
                            "meta_title": "سیاست بازپرداخت",
                            "page_title": "سیاست بازپرداخت",
                            "meta_keywords": "بازپرداخت ، سیاست ", "meta_description": ""}',
                'channel_id' => 1,
                'locale_id' => 3
            ], [
                'id' => '4',
                'url_key' => 'terms-conditions',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">محتوای صفحه شرایط و ضوابط</div>
                                   </div>',
                'page_title' => 'شرایط و ضوابط',
                'meta_title' => 'شرایط و ضوابط',
                'meta_description' => '',
                'meta_keywords' => 'شرایط ، ضوابط',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">Terms & conditions page content</div>\r\n</div>",
                            "meta_title": "شرایط و ضوابط",
                            "page_title": "شرایط و ضوابط",
                            "meta_keywords": "شرایط ، ضوابط ", "meta_description": ""}',
                'channel_id' => 1,
                'locale_id' => 3
            ], [
                'id' => '5',
                'url_key' => 'terms-of-use',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">شرایط استفاده از محتوای صفحه</div>
                                   </div>',
                'page_title' => 'شرایط استفاده',
                'meta_title' => 'شرایط استفاده',
                'meta_description' => '',
                'meta_keywords' => 'term, use',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">Terms of use page content</div>\r\n</div>",
                            "meta_title": "شرایط استفاده",
                            "page_title": "شرایط استفاده",
                            "meta_keywords": "اصطلاحات ، استفاده ", "meta_description": ""}',
                'channel_id' => 1,
                'locale_id' => 3
            ], [
                'id' => '6',
                'url_key' => 'contact-us',
                'html_content' => '<div class="static-container one-column">
                                   <div class="mb-5">محتوای صفحه با ما تماس بگیرید</div>
                                   </div>',
                'page_title' => 'با ما تماس بگیرید',
                'meta_title' => 'با ما تماس بگیرید',
                'meta_description' => '',
                'meta_keywords' => 'با ما تماس بگیرید',
                'content' => '{"html": "<div class=\"static-container one-column\">\r\n<div class=\"mb-5\">Contact us page content</div>\r\n</div>",
                            "meta_title": "با ما تماس بگیرید",
                            "page_title": "با ما تماس بگیرید",
                            "meta_keywords": "contact, us ", "meta_description": ""}',
                'channel_id' => 1,
                'locale_id' => 3
            ]
        ]);
    }
}