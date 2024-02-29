<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use \App\Models\Units;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
class Unit_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileLocation = 'data/additional-data/units.json';
        $json = File::get(storage_path('app/' . $fileLocation));
        $data = json_decode($json, true);
        $data = $data['units'];
         
        // Check if decoding was successful
        if ($data === null) {
            // Handle error (e.g., invalid JSON)
            echo "Error decoding JSON\n";
            throw new FileNotFoundException(sprintf("%s", 'File Missing'));
        }
    
        // Seed database with JSON data
        foreach($data as $value){
            Units::firstOrCreate(Arr::only([
                'id' => $value['id'],
                'name'=> $value['name'],
                'description'=> $value['description'],
                'release_id'=> $value['release_id'],
                'type'=> $value['type'],
                'age'=> $value['age'],
                'trained_at'=> $value['trained_at'],
                'cost'=> $value['cost'],
                'training_time'=> $value['training_time'],
                'hit_points'=> $value['hit_points'],
                'attack'=> $value['attack'],
                'attack_bonuses'=> $value['attack_bonuses'],
                'rate_of_fire'=> $value['rate_of_fire'],
                'melee_armor'=> $value['melee_armor'],
                'pierce_armor'=> $value['pierce_armor'],
                'speed'=> $value['speed'],
                'line_of_sight'=> $value['line_of_sight'],
                'upgrades_to'=> $value['upgrades_to'],
                'upgrade_cost'=> $value['upgrade_cost'],
                'upgrade_time'=> $value['upgrade_time'],
            ], (new \App\Models\Units)->getFillable()));
        }
    }
    }

