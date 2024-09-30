<?php 
namespace Database\Seeders;
        
        use Illuminate\Database\Console\Seeds\WithoutModelEvents;
        use Illuminate\Database\Seeder;
        use Illuminate\Support\Facades\DB;
        
        class TestimonialSeeder extends Seeder
        {
            /**
             * Run the database seeds.
             *
             * @return void
             */
            public function run()
            {
                DB::table('testimonials')->insert([
                    [
                        'name' => json_encode(['ar' => 'أحمد محمد', 'en' => 'Ahmed Mohamed', 'fa' => 'احمد محمد']),
                        'job_title' => json_encode(['ar' => 'مهندس معماري', 'en' => 'Architect', 'fa' => 'معمار']),
                        'desc' => json_encode(['ar' => 'هذا المهندس ممتاز في تصميم الشقق.', 'en' => 'This architect is excellent at designing apartments.', 'fa' => 'این معمار در طراحی آپارتمان‌ها بسیار عالی است.']),
                        'image' => 'testimonials/ahmed_mohamed.png',
                    ],
                    [
                        'name' => json_encode(['ar' => 'سارة علي', 'en' => 'Sarah Ali', 'fa' => 'سارا علی']),
                        'job_title' => json_encode(['ar' => 'مصممة داخلية', 'en' => 'Interior Designer', 'fa' => 'طراح داخلی']),
                        'desc' => json_encode(['ar' => 'مبدعة في تصاميم الفلل الفاخرة.', 'en' => 'Creative in luxury villa designs.', 'fa' => 'خلاق در طراحی ویلاهای لوکس.']),
                        'image' => 'testimonials/sarah_ali.png',
                    ],
                    [
                        'name' => json_encode(['ar' => 'محمد عبد الله', 'en' => 'Mohamed Abdallah', 'fa' => 'محمد عبدالله']),
                        'job_title' => json_encode(['ar' => 'مطور عقاري', 'en' => 'Real Estate Developer', 'fa' => 'توسعه دهنده املاک و مستغلات']),
                        'desc' => json_encode(['ar' => 'له سمعة طيبة في بناء المحلات التجارية.', 'en' => 'He has a great reputation for building commercial shops.', 'fa' => 'او شهرت زیادی در ساخت فروشگاه‌های تجاری دارد.']),
                        'image' => 'testimonials/mohamed_abdallah.png',
                    ],
                ]);
            }
        
    }
