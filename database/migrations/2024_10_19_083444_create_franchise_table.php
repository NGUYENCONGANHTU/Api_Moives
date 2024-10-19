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
        Schema::create('franchise', function (Blueprint $table) { // thương hiệu  
            $table->id();
            $table->string('image')->nullable(); // Hình ảnh, có thể để trống
            $table->string('name'); // Tên thương hiệu
            $table->string('movies_id'); // ID phim (liên kết tới bảng movies)
            $table->tinyInteger('status')->default(0); // Trạng thái thương hiệu (0: không hoạt động, 1: hoạt động)
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franchise');
    }
};