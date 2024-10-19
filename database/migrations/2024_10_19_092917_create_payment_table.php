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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->integer("booking_id");
            $table->string("transaction_id")->unique();// Mã giao dịch (đảm bảo duy nhất)
            $table->tinyInteger('status')->default(0);// Trạng thái (0: chưa thanh toán, 1: đã thanh toán)
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};