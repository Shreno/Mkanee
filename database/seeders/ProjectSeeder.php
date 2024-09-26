<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => json_encode(['ar' => 'مشروع زهره', 'en' => 'Zahra Project', 'fa' => 'پروژه زهرا']),
                'image' => 'projects/zahra.png',
                'desc' => json_encode(['ar' => 'وصف مشروع زهره', 'en' => 'Description of Zahra Project', 'fa' => 'توضیحات پروژه زهرا']),
            ]
            // يمكنك إضافة المزيد من المشاريع هنا
        ]);
    }
}