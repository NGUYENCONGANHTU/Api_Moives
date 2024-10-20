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
        Schema::create('geners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //tên thể loại
            $table->string('description')->nullable(); // mô tả thể loại
            $table->tinyInteger('status')->default(0); // trạng thái của thể loại
            $table->Integer('movies_id'); // ID phim (liên kết tới bảng movies)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geners');
    }
};