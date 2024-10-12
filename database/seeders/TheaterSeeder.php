<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theater;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theater')->truncate();

        for($i = 1; $i <= 6 ; $i++){
            Theater::create([
                'name' => 'CGV Hùng Vương Plaza'.$i,
                'address' => `Tầng `. $i.`| Hùng Vương Plaza, 126 Hồng Bàng, Phường 12, Quận 5, TP. Hồ Chí Minh.`,
                'phone' => '046275524'.$i,
                'price_ticket' => '12000',
                'hotline' => `1900 6017`.$i,
                'id_place_theater' => rand(1,13),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for($i = 1; $i <= 6 ; $i++){
            Theater::create([
                'name' => 'CGV Hồ Gươm Plaza'.$i,
                'address' => `Tầng `. $i.`| TTTM Hồ Gươm Plaza, 110 Trần Phú, Phường Mỗ Lao, Quận Hà Đông, Hà Nội.`,
                'phone' => '046275524'.$i,
                'price_ticket' => '12000',
                'hotline' => `1900 6017`.$i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for($i = 1; $i <= 3 ; $i++){
            Theater::create([
                'name' => 'CGV Vĩnh Trung Plaza'.$i,
                'address' => `255-25`. $i . `| đường Hùng Vương Quận Thanh Khê Tp. Đà Nẵng.`,
                'phone' => '046275524'.$i,
                'price_ticket' => '12000',
                'hotline' => `1900 6017`.$i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        for($i = 1; $i <= 3 ; $i++){
            Theater::create([
                'name' => 'CGV Lapen Center Vũng Tàu'.$i,
                'address' => `Lapen Center Mal`.`|Số 33 ` . $i . 'A' . `Đường 30/4, Phường 9, TP. Vũng Tàu, Bà Rịa - Vũng Tàu.`,
                'phone' => '046275524'.$i,
                'price_ticket' => '12000',
                'hotline' => `1900 6017`.$i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
       
    }
}