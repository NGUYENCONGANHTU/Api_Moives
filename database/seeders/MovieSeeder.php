<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->truncate();

        for($i = 1; $i <= 20 ; $i++){
            Movie::create([
                'title' => 'TEE YOD: QUỶ ĂN TẠNG PHẦN '.$i,
                'director_id' => rand(1, 10),
                'genre' => 'Hành động 3D',
                'price' => 120000,
                'sale_price' => $i % 2 ? 10000 : 0,
                'banner_image' => 'https://picsum.photos/50',
                'trailer_url' => 'https://www.youtube.com/embed/XwCxkefWeGk?si=uE8Ni84lTRn7FTkr',
                'stock_quantity' => 100,
                'like' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}