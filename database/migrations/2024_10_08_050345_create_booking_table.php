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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->integer('place_id');// ID địa điểm
            $table->string('date_booking');// Ngày đặt vé (nên sử dụng kiểu date)
            $table->string('image')->nullable();// Hình ảnh, có thể để trống
            $table->tinyInteger('status')->default(0);// Trạng thái đặt vé 
            $table->integer('movies_id');// ID phim
            $table->double('price');// Giá vé
            $table->integer('seat');// Số ghế đã đặt
            $table->integer('user_id');// ID người dùng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};