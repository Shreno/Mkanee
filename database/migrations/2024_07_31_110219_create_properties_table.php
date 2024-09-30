<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('map')->nullable();
            $table->text('address');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->foreignId('neighborhood_id')->constrained()->onDelete('cascade');
            $table->enum('direction', ['north', 'south', 'east', 'west']);
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('property_type_id')->constrained()->onDelete('cascade');

            
            $table->integer('is_active')->default(0); 
            $table->time('check_in_time')->nullable(); // وقت الوصول، الافتراضي 04:00 مساءً
            $table->time('check_out_time')->nullable(); // وقت المغادرة
            $table->decimal('rate_per_day', 10, 2)->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
