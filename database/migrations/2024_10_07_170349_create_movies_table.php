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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->string('name'); // Tên phim
            $table->integer('director_id'); // Mã đạo diễn (liên kết tới bảng đạo diễn)
            $table->tinyInteger('status')->default(0); // Trạng thái phim (0: chưa phát hành, 1: đã phát hành)
            $table->dateTime('release_date')->nullable(); // Ngày khởi chiếu phim, có thể null
            $table->string('language')->default(''); // Ngôn ngữ phim, mặc định là chuỗi rỗng
            $table->integer('like')->default(0); // Số lượt thích, mặc định là 0
            $table->text('description')->nullable(); // Mô tả phim, có thể null
            $table->string('rating')->nullable(); // Đánh giá phim, có thể null
            $table->string('age_restriction')->default('13+'); // Độ tuổi trên 13, mặc định là "13+"
            $table->string('place_id')->nullable(); // Địa điểm, có thể null
            $table->string('distributor')->nullable(); // Đơn vị phát hành phim, có thể null
            $table->string('trailer')->nullable(); // Trailer của phim, có thể null
            $table->timestamps(); // Tạo sẵn cột created_at và updated_at
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};