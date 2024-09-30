<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(SmsSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(StatusSeeder::class);

        $this->call(SettingSeeder::class);
        $this->call(NeighborhoodsSeeder::class);
        $this->call(PrimaryAmenitySeeder::class);
        $this->call(SubAmenitySeeder::class);
        $this->call(PropertyFeatureSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(PropertyTypeSeeder::class);


        $this->call(PropertySeeder::class);
    }
}
