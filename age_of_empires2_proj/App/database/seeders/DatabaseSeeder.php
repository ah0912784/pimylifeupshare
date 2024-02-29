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
        $this->call(Releases_Seeder::class);
        $this->call(Civilizations_Seeder::class);
        $this->call(Building_Seeder::class);
        $this->call(Technologies_Seeder::class);
        $this->call(Unit_Seeder::class);
        
    }
}
