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
            $table->id(); // Tương đương với auto-increment primary key
            $table->string('title'); // varchar(255)
            $table->unsignedBigInteger('director_id')->nullable(); // director_id int(100)
            $table->unsignedBigInteger('id_theater')->nullable();
            $table->unsignedBigInteger('actors_id')->nullable(); // actors_id int(100)
            $table->string('director')->nullable(); // director varchar(100)
            $table->string('cast'); // cast varchar(255) [not null]
            $table->string('genre')->nullable(); // genre varchar(100)
            $table->text('description')->nullable(); // description text
            $table->dateTime('release_date')->nullable(); 
            $table->string('trailer_url')->nullable(); 
            $table->float('price');
            $table->float('sale_price')->default(0);
            $table->string('banner_image', 255)->nullable(); 
            $table->integer('stock_quantity')->nullable(); 
            $table->integer('like')->default(0);
            $table->tinyInteger("status")->default(0);
            $table->timestamps(); 
           
            // VARCHAR thì mặc định là string
            //  ->nullable() : khi trường có nullable đằng sau thì mặc định trường đó sẽ được để trống (null)
            // ngược lại nếu không có nullable đăng sau thì trường đó không đc phép để trông , nếu người dùng thêm data mà bỏ quên trường không có nullable thì sẽ lỗi
            // INT  thì mặc định là integer
            // (áp dụng cho trường có integer ) ->default(0) : khi trường có default đằng sau thì mặc định trường đó khi thêm data mà không cần thêm trường đó thì mặc định là 0
            // status, type thì mặc định kiểu dữ liệu là  $table->tinyInteger('status|type')->default(0)
            // nếu có [not null] thì không cần thêm gì 
            // nếu không có thì thêm nullable vào sau các trường không có not null 
           // laravel mặc sẽ tạo 2 trường create_at và update_at
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