<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['id' => 1, 'name' => json_encode(['ar' => 'تبوك', 'en' => 'Tabuk', 'fa' => 'تبوک']), 'image' => "cities/Tabuk.jpg"],
            ['id' => 2, 'name' => json_encode(['ar' => 'الرياض', 'en' => 'Riyadh', 'fa' => 'ریاض']), 'image' => "cities/Riyadh.jpg"],
            ['id' => 3, 'name' => json_encode(['ar' => 'الطائف', 'en' => 'At Taif', 'fa' => 'طائف']), 'image' => "cities/Taif.jpg"],
            ['id' => 4, 'name' => json_encode(['ar' => 'حائل', 'en' => 'Hail', 'fa' => 'حائل']), 'image' => "cities/Hail.jpg"],
            ['id' => 5, 'name' => json_encode(['ar' => 'بريدة', 'en' => 'Buraydah', 'fa' => 'بریده']), 'image' => "cities/Buraydah.jpg"],
           
        ]);
    }
}