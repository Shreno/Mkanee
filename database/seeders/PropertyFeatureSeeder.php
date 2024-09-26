<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_features')->insert([
            [
                'name' => json_encode(['ar' => 'دخول ذاتي', 'en' => 'Self Check-in', 'fa' => 'چک این خودکار']),
                'type' => 'internal', 
                'icon' => 'propertyfeatures/icon1.png'
            ],
            [
                'name' => json_encode(['ar' => 'انترنت', 'en' => 'Internet', 'fa' => 'اینترنت']),
                'type' => 'internal', 
                'icon' => 'propertyfeatures/Internet.png'
            ],
            [
                'name' => json_encode(['ar' => 'اطلالة على الحديقة', 'en' => 'Garden View', 'fa' => 'نمای باغ']),
                'type' => 'external', 
                'icon' => 'propertyfeatures/GardenView.png'
            ],
            [
                'name' => json_encode(['ar' => 'اطلالة على الجبل', 'en' => 'Mountain View', 'fa' => 'نمای کوه']),
                'type' => 'external', 
                'icon' => 'propertyfeatures/MountainView.png'
            ],
            [
                'name' => json_encode(['ar' => 'مدخل سيارة', 'en' => 'Car Entrance', 'fa' => 'ورود خودرو']),
                'type' => 'external', 
                'icon' => 'propertyfeatures/CarEntrance.png'
            ],
            [
                'name' => json_encode(['ar' => 'شلال على الجبل', 'en' => 'Mountain Waterfall', 'fa' => 'آبشار کوه']),
                'type' => 'external', 
                'icon' => 'propertyfeatures/MountainWaterfall.png'
            ],
        ]);
    }
}