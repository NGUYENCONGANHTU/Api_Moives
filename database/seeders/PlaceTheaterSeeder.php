<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlaceThreate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlaceTheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place_theater')->truncate();

        PlaceThreate::create([
            'name' => 'Hồ Chí Minh'
        ]);

        PlaceThreate::create([
            'name' => 'Hà Nội'
        ]);

        PlaceThreate::create([
            'name' => 'Đà Nẵng'
        ]);

        PlaceThreate::create([
            'name' => 'Cần Thơ'
        ]);

        PlaceThreate::create([
            'name' => 'Đồng Nai'
        ]);

        PlaceThreate::create([
            'name' => 'Hải Phòng'
        ]);

        PlaceThreate::create([
            'name' => 'Bà Rịa-Vũng Tàu'
        ]);

        PlaceThreate::create([
            'name' => 'Bình Định'
        ]);

        PlaceThreate::create([
            'name' => 'Bình Dương'
        ]);

        PlaceThreate::create([
            'name' => 'Đắk Lắk'
        ]);

        PlaceThreate::create([
            'name' => 'Trà Vinh'
        ]);

        PlaceThreate::create([
            'name' => 'Yên Bái'
        ]);

        PlaceThreate::create([
            'name' => 'Vĩnh Long'
        ]);

        PlaceThreate::create([
            'name' => 'Hậu Giang'
        ]);

        PlaceThreate::create([
            'name' => 'Hà Tĩnh'
        ]);

        PlaceThreate::create([
            'name' => 'Phú Yên'
        ]);

        PlaceThreate::create([
            'name' => 'Đồng Tháp'
        ]);

        PlaceThreate::create([
            'name' => 'Bạc Liêu'
        ]);
    }
}