<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'name' => json_encode(['ar' => 'بانر تجريبي' , 'en' => 'test banner','fa'=>'بنر نسخه ی نمایشی']) ,
                'desc' => json_encode(['ar' => 'بانر تجريبي' , 'en' => 'test banner','fa'=>'بنر نسخه ی نمایشی']) ,
                'image' => 'banners/bg-slider-3.jpg' ,
                'is_active' => 1
            ]
        ]);
    }
}
