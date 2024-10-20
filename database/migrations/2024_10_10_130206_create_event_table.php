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
            $table->string("name");// Tên sự kiện
            $table->string('image')->nullable(); // Hình ảnh, có thể để trống
            $table->string("description");// Mô tả về sự kiện, có thể null
            $table->tinyInteger('status')->default(0);  // Trạng thái của sự kiện (0: không hoạt động, 1: hoạt động)
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