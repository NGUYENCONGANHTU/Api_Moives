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
        Schema::create('theater', function (Blueprint $table) {
            $table->id();
            $table->integer('id_place_theater'); 
            $table->string('name', 255); 
            $table->string('descript', 255)->nullable();
            $table->string('address', 255); 
            $table->string('calendar', 255)->nullable(); 
            $table->string('img', 255)->nullable();
            $table->string('map')->nullable(); 
            $table->string('phone', 12); 
            $table->string('price_ticket'); 
            $table->string('hotline', 12); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theater');
    }
};