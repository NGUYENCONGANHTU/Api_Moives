<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionsSeeder::class,
            RoleSeeder::class,
            ActorSeeder::class,
            DirectorsSeeder::class,
            MovieSeeder::class,
            PlaceTheaterSeeder::class,
            TheaterSeeder::class,
            AdminSeeder::class,
            BannerSeeder::class
        ]);
    }
}