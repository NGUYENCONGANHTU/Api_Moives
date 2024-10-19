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
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string("name");// Tên diễn viên
            $table->string("description");// Mô tả về diễn viên, có thể null
            $table->tinyInteger('status')->default(0);  // Trạng thái của diễn viên (0: không hoạt động, 1: hoạt động)
            $table->Integer('movie_id'); // ID phim (liên kết tới bảng movies)
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};