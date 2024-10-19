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
        Schema::create('cinema', function (Blueprint $table) {
            $table->id();
            $table->string("name");// Tên rạp chiếu phim
            $table->text('description')->nullable(); // Mô tả về rạp chiếu phim, có thể null
            $table->tinyInteger('status')->default(0);  // Trạng thái của rạp chiếu phim (0: không hoạt động, 1: hoạt động)
            $table->string('hotline');  // số hotline rạp chiếu phim 
            $table->string('address'); // địa chỉ
            $table->string('url_map'); //bản đồ rạp chiếu phim 
            $table->Integer('cinema_id');  //mã rạp chiếu phim 
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema');
    }
};