<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\City;
use App\Models\Neighborhood;
use App\Models\PropertyType;
use App\Models\PrimaryAmenity;
use App\Models\SubAmenity;
use App\Models\PropertyFeature;
use App\Models\Project;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Ensure the related models have data
        $city = City::first();
        $neighborhood = Neighborhood::first();
        $propertyType = PropertyType::first();
        $project = Project::first();

        if (!$city || !$neighborhood || !$propertyType || !$project) {
            return;
        }

        // تعريف العقارات
        $properties = [
            [
                'title' => ['ar' => 'عنوان العقار 1', 'en' => 'Property Title 1', 'fa' => 'عنوان ملک 1'],
                'description' => ['ar' => 'وصف العقار 1', 'en' => 'Property Description 1', 'fa' => 'شرح ملک 1'],
            ],
            [
                'title' => ['ar' => 'عقار مميز جدا 2', 'en' => 'Featured Property 2', 'fa' => 'ملک برجسته 2'],
                'description' => ['ar' => 'وصف عقار مميز جدا 2', 'en' => 'Featured Property Description 2', 'fa' => 'شرح ملک برجسته 2'],
            ],
            [
                'title' => ['ar' => 'عقار مميز جدا 3', 'en' => 'Featured Property 3', 'fa' => 'ملک برجسته 3'],
                'description' => ['ar' => 'وصف عقار مميز جدا 3', 'en' => 'Featured Property Description 3', 'fa' => 'شرح ملک برجسته 3'],
            ],
            // يمكنك إضافة المزيد من العقارات هنا
        ];

        foreach ($properties as $propertyData) {
            $property = Property::create([
                'title' => $propertyData['title'],
                'description' => $propertyData['description'],
                'map' => 'https://maps.example.com/property-location',
                'address' => ['ar' => 'عنوان العقار 123', 'en' => '123 Property Address', 'fa' => 'آدرس ملک 123'],

                'city_id' => $city->id,
                'neighborhood_id' => $neighborhood->id,
                'direction' => 'north',
                'property_type_id' => $propertyType->id,
                'project_id' => $project->id,
                'area'=>'150',
                
            ]);

            // ربط الميزات والامتيازات بالعقار
            $primaryAmenities = PrimaryAmenity::take(3)->get();
            $subAmenities = SubAmenity::take(5)->get();
            $propertyFeatures = PropertyFeature::take(3)->get();

            $property->primaryAmenities()->attach($primaryAmenities);
            $property->subAmenities()->attach($subAmenities);
            $property->propertyFeatures()->attach($propertyFeatures);

            // إضافة الصور
            $property->images()->createMany([
                ['image' => 'properties/property1.webp'],
                ['image' => 'properties/property2.jpg'],
                ['image' => 'properties/property3.jpg'],
                ['image' => 'properties/property4.jpg'],
            ]);
        }
    }
}