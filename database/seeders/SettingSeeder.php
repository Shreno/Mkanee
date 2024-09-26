<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('settings')->insert([

            ['key' => 'app_name_ar', 'type' => 'text', 'value' => 'مكانى'],
            ['key' => 'app_name_en', 'type' => 'text', 'value' => 'mkanee'],
            ['key' => 'app_name_fa', 'type' => 'text', 'value' => 'جای من'],

            ['key' => 'firebase_key', 'type' => 'text', 'value' => 'AAAAi0Y_HnY:APA91bGeuHqUXsXiwWMDlJ-tenEOiKmRZ7pfifFPvI0XUzUiIRD6togg468docAR0gdTpY40Yvr50I8610Fdm9jG3RT-iYakNLthfVcxViBSJ6lIzt5gVh77Y_4VY3oqYyP64Svx6QxR'],
            ['key' => 'app_percentage', 'type' => 'number', 'value' => 10],
            ['key' => 'logo', 'type' => 'image', 'value' => 'dashboard/assets/media/avatars/300-1.jpg'],
            ['key' => 'about_ar', 'type' => 'textarea', 'value' => 'مكانى'],
            ['key' => 'about_en', 'type' => 'textarea', 'value' => 'mkanee'],
            ['key' => 'about_fa', 'type' => 'textarea', 'value' => 'جای من'],

            ['key' => 'terms_ar', 'type' => 'textarea', 'value' => 'مكانى'],
            ['key' => 'terms_en', 'type' => 'textarea', 'value' => 'mkanee'],
            ['key' => 'terms_fa', 'type' => 'textarea', 'value' => 'جای من'],

            ['key' => 'policy_ar', 'type' => 'textarea', 'value' => 'مكانى'],
            ['key' => 'policy_en', 'type' => 'textarea', 'value' => 'mkanee'],
            ['key' => 'policy_fa', 'type' => 'textarea', 'value' => 'جای من'],

            ['key' => 'facebook', 'type' => 'link', 'value' => 'https://www.facebook.com/'],
            ['key' => 'twitter', 'type' => 'link', 'value' => 'https://www.twitter.com/'],
            ['key' => 'instagram', 'type' => 'link', 'value' => 'https://www.instagram.com/'],
            ['key' => 'slogan_en', 'type' => 'text', 'value' => 'mkanee'],
            ['key' => 'slogan_ar', 'type' => 'text', 'value' => 'مكانى'],
            ['key' => 'slogan_fa', 'type' => 'text', 'value' => 'جای من'],

            ['key' => 'email', 'type' => 'text', 'value' => 'admin@gmail.com'],
            ['key' => 'phone', 'type' => 'text', 'value' => '1346546464'],
            ['key' => 'address_en', 'type' => 'text', 'value' => 'address'],
            ['key' => 'address_ar', 'type' => 'text', 'value' => 'العنوان'],
            ['key' => 'address_fa', 'type' => 'text', 'value' => 'آدرس'],



        ]);
    }
}
