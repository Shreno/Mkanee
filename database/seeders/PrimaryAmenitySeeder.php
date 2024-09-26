<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimaryAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_amenities')->insert([
            ['name' => json_encode(['ar' => 'غرفة النوم', 'en' => 'Bedroom', 'fa' => 'اتاق خواب']), 'icon' => 'amenities/bedroom.png'],
            ['name' => json_encode(['ar' => 'المجلس', 'en' => 'Divan', 'fa' => 'دیوان']), 'icon' => 'amenities/divan.png'],
            ['name' => json_encode(['ar' => 'المسبح', 'en' => 'Pool', 'fa' => 'استخر']), 'icon' => 'amenities/pool.png'],
            ['name' => json_encode(['ar' => 'المطبخ', 'en' => 'Kitchen', 'fa' => 'آشپزخانه']), 'icon' => 'amenities/kitchen.png'],
            ['name' => json_encode(['ar' => 'دورة المياه', 'en' => 'Bathroom', 'fa' => 'حمام']), 'icon' => 'amenities/bathroom.png'],
        ]);
    }
}