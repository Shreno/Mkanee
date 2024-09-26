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
            ['id' => 3, 'name' => json_encode(['ar' => 'الرياض', 'en' => 'Riyadh', 'fa' => 'ریاض']), 'image' => "cities/Riyadh.jpg"],
            ['id' => 5, 'name' => json_encode(['ar' => 'الطائف', 'en' => 'At Taif', 'fa' => 'طائف']), 'image' => "cities/Taif.jpg"],
            ['id' => 6, 'name' => json_encode(['ar' => 'مكة المكرمة', 'en' => 'Makkah Al Mukarramah', 'fa' => 'مکه مکرمه']), 'image' => "cities/Makkah.jpg"],
            ['id' => 10, 'name' => json_encode(['ar' => 'حائل', 'en' => 'Hail', 'fa' => 'حائل']), 'image' => "cities/Hail.jpg"],
            ['id' => 11, 'name' => json_encode(['ar' => 'بريدة', 'en' => 'Buraydah', 'fa' => 'بریده']), 'image' => "cities/Buraydah.jpg"],
            ['id' => 12, 'name' => json_encode(['ar' => 'الهفوف', 'en' => 'Al Hufuf', 'fa' => 'الهفوف']), 'image' => "cities/Hufuf.jpg"],
            ['id' => 13, 'name' => json_encode(['ar' => 'الدمام', 'en' => 'Ad Dammam', 'fa' => 'دمام']), 'image' => "cities/Dammam.JPG"],
            ['id' => 14, 'name' => json_encode(['ar' => 'المدينة المنورة', 'en' => 'Al Madinah Al Munawwarah', 'fa' => 'مدینه منوره']), 'image' => "cities/Munawwarah.jpg"],
            ['id' => 15, 'name' => json_encode(['ar' => 'ابها', 'en' => 'Abha', 'fa' => 'ابها']), 'image' => null],
            ['id' => 17, 'name' => json_encode(['ar' => 'جازان', 'en' => 'Jazan', 'fa' => 'جازان']), 'image' => null],
            ['id' => 18, 'name' => json_encode(['ar' => 'جدة', 'en' => 'Jeddah', 'fa' => 'جده']), 'image' => null],
            ['id' => 24, 'name' => json_encode(['ar' => 'المجمعة', 'en' => 'Al Majmaah', 'fa' => 'المجمعه']), 'image' => null],
            ['id' => 31, 'name' => json_encode(['ar' => 'الخبر', 'en' => 'Al Khubar', 'fa' => 'الخبر']), 'image' => null],
            ['id' => 47, 'name' => json_encode(['ar' => 'حفر الباطن', 'en' => 'Hafar Al Batin', 'fa' => 'حفر الباطن']), 'image' => null],
            ['id' => 62, 'name' => json_encode(['ar' => 'خميس مشيط', 'en' => 'Khamis Mushayt', 'fa' => 'خمیس مشیط']), 'image' => null],
            ['id' => 65, 'name' => json_encode(['ar' => 'احد رفيده', 'en' => 'Ahad Rifaydah', 'fa' => 'احد رفیده']), 'image' => null],
            ['id' => 67, 'name' => json_encode(['ar' => 'القطيف', 'en' => 'Al Qatif', 'fa' => 'قطیف']), 'image' => null],
            ['id' => 80, 'name' => json_encode(['ar' => 'عنيزة', 'en' => 'Unayzah', 'fa' => 'عنیزه']), 'image' => null],
            ['id' => 89, 'name' => json_encode(['ar' => 'قرية العليا', 'en' => 'Qaryat Al Ulya', 'fa' => 'قریه العلیا']), 'image' => null],
            ['id' => 113, 'name' => json_encode(['ar' => 'الجبيل', 'en' => 'Al Jubail', 'fa' => 'الجبیل']), 'image' => null],
            ['id' => 115, 'name' => json_encode(['ar' => 'النعيرية', 'en' => 'An Nuayriyah', 'fa' => 'النعیریه']), 'image' => null],
            ['id' => 227, 'name' => json_encode(['ar' => 'الظهران', 'en' => 'Dhahran', 'fa' => 'ظهران']), 'image' => null],
            ['id' => 233, 'name' => json_encode(['ar' => 'الوجه', 'en' => 'Al Wajh', 'fa' => 'الوجه']), 'image' => null],
            ['id' => 243, 'name' => json_encode(['ar' => 'بقيق', 'en' => 'Buqayq', 'fa' => 'بقیق']), 'image' => null],
            ['id' => 270, 'name' => json_encode(['ar' => 'الزلفي', 'en' => 'Az Zulfi', 'fa' => 'الزلفی']), 'image' => null],
            ['id' => 288, 'name' => json_encode(['ar' => 'خيبر', 'en' => 'Khaybar', 'fa' => 'خیبر']), 'image' => null],
            ['id' => 306, 'name' => json_encode(['ar' => 'الغاط', 'en' => 'Al Ghat', 'fa' => 'الغاط']), 'image' => null],
            ['id' => 323, 'name' => json_encode(['ar' => 'املج', 'en' => 'Umluj', 'fa' => 'املج']), 'image' => null],
            ['id' => 377, 'name' => json_encode(['ar' => 'رابغ', 'en' => 'Rabigh', 'fa' => 'رابغ']), 'image' => null],
            ['id' => 418, 'name' => json_encode(['ar' => 'عفيف', 'en' => 'Afif', 'fa' => 'عفیف']), 'image' => null],
            ['id' => 443, 'name' => json_encode(['ar' => 'ثادق', 'en' => 'Thadiq', 'fa' => 'ثادق']), 'image' => null],
            ['id' => 454, 'name' => json_encode(['ar' => 'سيهات', 'en' => 'Sayhat', 'fa' => 'سیهات']), 'image' => null],
            ['id' => 456, 'name' => json_encode(['ar' => 'تاروت', 'en' => 'Tarut', 'fa' => 'تاروت']), 'image' => null],
            ['id' => 483, 'name' => json_encode(['ar' => 'ينبع', 'en' => 'Yanbu', 'fa' => 'ینبع']), 'image' => null],
            ['id' => 500, 'name' => json_encode(['ar' => 'شقراء', 'en' => 'Shaqra', 'fa' => 'شقراء']), 'image' => null],
            ['id' => 669, 'name' => json_encode(['ar' => 'الدوادمي', 'en' => 'Ad Duwadimi', 'fa' => 'الدوادمی']), 'image' => null],
            ['id' => 828, 'name' => json_encode(['ar' => 'الدرعية', 'en' => 'Ad Diriyah', 'fa' => 'الدرعیه']), 'image' => null],
            ['id' => 880, 'name' => json_encode(['ar' => 'القويعية', 'en' => 'Quwayiyah', 'fa' => 'القویعیه']), 'image' => null],
            ['id' => 990, 'name' => json_encode(['ar' => 'ثول', 'en' => 'Thuwal', 'fa' => 'ثول']), 'image' => null],
        ]);
    }
}