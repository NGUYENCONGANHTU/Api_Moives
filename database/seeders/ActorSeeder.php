<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actor')->truncate();

        for($i = 1; $i <= 10 ; $i++){
            Actor::create([
                'full_name' => 'Taweewat'.$i %2 ? "Wantha".$i : 'Sanders'.$i,
                'birth_date' => `3`.$i,
                'movie_id' => rand(1, 20),
                'nationality' => 'Mỹ',
                'bio' => '',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}