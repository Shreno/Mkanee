<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_attachments')->insert([
            [
                'name' => json_encode(['ar' => 'غرفة نوم', 'en' => 'Attachment 1', 'fa' => 'اتاق خواب']),
                'image' => 'propertyattachments/' . Str::random(10) . '.jpg',
            ],
            [
                'name' => json_encode(['ar' => 'مجلس', 'en' => 'Attachment 2', 'fa' => 'دیوان']),
                'image' => 'propertyattachments/' . Str::random(10) . '.jpg',
            ],
            [
                'name' => json_encode(['ar' => 'مسبح', 'en' => 'Attachment 3', 'fa' => 'استخر']),
                'image' => 'propertyattachments/' . Str::random(10) . '.jpg',
            ],
            [
                'name' => json_encode(['ar' => 'مطبخ', 'en' => 'Attachment 4', 'fa' => 'آشپزخانه']),
                'image' => 'propertyattachments/' . Str::random(10) . '.jpg',
            ],
            [
                'name' => json_encode(['ar' => 'مرفق 5', 'en' => 'Attachment 5', 'fa' => 'پیوست 5']),
                'image' => 'propertyattachments/' . Str::random(10) . '.jpg',
            ],
        ]);
    }
}