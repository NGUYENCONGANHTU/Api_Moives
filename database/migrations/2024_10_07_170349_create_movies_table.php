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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->integer('director_id');
            $table->string('genre')->nullable(); 
            $table->text('description')->nullable();
            $table->dateTime('release_date')->nullable(); 
            $table->string('trailer_url')->nullable(); 
            $table->float('price');
            $table->float('sale_price')->default(0);
            $table->string('banner_image', 255)->nullable(); 
            $table->integer('stock_quantity')->nullable(); 
            $table->integer('like')->default(0);
            $table->tinyInteger("status")->default(0);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};