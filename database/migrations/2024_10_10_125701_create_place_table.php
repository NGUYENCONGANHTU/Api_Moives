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
        Schema::create('place', function (Blueprint $table) {
            $table->id();
            $table->string("name");// Tên địa điểm
            $table->string("description");// Mô tả về địa điểm, có thể null
            $table->tinyInteger('status')->default(0);  // Trạng thái của địa điểm (0: không hoạt động, 1: hoạt động)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place');
    }
};