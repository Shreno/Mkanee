<?php 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_types')->insert([
            [
                'name' => json_encode(['ar' => 'شقق', 'en' => 'Apartments', 'fa' => 'آپارتمان‌ها']),
                'image' => 'propertytypes/apartments.png',
                'desc' => json_encode(['ar' => 'وصف الشقق', 'en' => 'Description of Apartments', 'fa' => 'توضیحات آپارتمان‌ها']),
            ],
            [
                'name' => json_encode(['ar' => 'فلل', 'en' => 'Villas', 'fa' => 'ویلاها']),
                'image' => 'propertytypes/villas.png',
                'desc' => json_encode(['ar' => 'وصف الفلل', 'en' => 'Description of Villas', 'fa' => 'توضیحات ویلاها']),
            ],
            [
                'name' => json_encode(['ar' => 'محلات تجارية', 'en' => 'Commercial Shops', 'fa' => 'فروشگاه‌های تجاری']),
                'image' => 'propertytypes/commercial_shops.png',
                'desc' => json_encode(['ar' => 'وصف المحلات التجارية', 'en' => 'Description of Commercial Shops', 'fa' => 'توضیحات فروشگاه‌های تجاری']),
            ],
        ]);
    }
}