<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Directors;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->truncate();

        for($i = 1; $i <= 10 ; $i++){
            Directors::create([
                'full_name' => 'Taweewat'.$i %2 ? "Wantha". $i : 'Sanders'.$i,
                'birth_date' => `3`.$i,
                'nationality' => 'Mỹ',
                'bio' => '',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}