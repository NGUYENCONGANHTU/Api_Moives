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
            $table->integer("user_id");
            $table->integer("movie_id");
            $table->integer("id_theater");
            $table->integer("id_event");
            $table->integer("id_place_theater");
            $table->dateTime("booking_date")->default(DB::raw('CURRENT_TIMESTAMP')); //Ngày đặt vé, mặc định là thời gian hiện tại.
            $table->integer("quantity");
            $table->float("price");
            $table->float("discount")->default(0);
            $table->float("total_amount")->default(0);
            $table->string("seat_selection");
            $table->string("city");
            $table->dateTime("show_time");
            $table->string("payment_method");
            $table->tinyInteger("status")->default(0);
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