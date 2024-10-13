<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->truncate();

        for($i = 1; $i <= 10 ; $i++){
            Banner::create([
                'link' => 'https://picsum.photos/50',
                'title' => 'Banner'.$i,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}