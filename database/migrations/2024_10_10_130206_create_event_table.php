<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->integer('id_movie'); 
            $table->integer('id_place_theater'); 
            $table->integer('id_theater'); 
            $table->string('name', 255); 
            $table->string('descript', 255)->nullable(); 
            $table->string('time_event', 255); 
            $table->boolean('is_sales')->default(false); 
            $table->string('start_time', 255)->nullable(); 
            $table->string('end_time', 255)->nullable(); 
            $table->string('percent_sales', 255)->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};