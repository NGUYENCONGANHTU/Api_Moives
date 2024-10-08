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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->integer("booking_id");
            $table->integer("user_id");
            $table->integer("movie_id");
            $table->string("seat_number");
            $table->string("city");
            $table->integer('status')->default(0); // Trạng thái vé (0:available, 1:booked, 2:canceled)
            $table->decimal("price");
            $table->decimal("discount")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};