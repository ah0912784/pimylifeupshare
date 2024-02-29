<?php

namespace Database\Seeders;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use App\Models\Civilization;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
class Civilizations_Seeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $fileLocation = '/data/empires.json';
        $json = File::get(storage_path('app/' . $fileLocation));
        $data = json_decode($json, true);
        $data = $data['civilizations'];
     
        
        //Check if decoding was successful
        if ($data === null) {
            // Handle error (e.g., invalid JSON)
            echo "Error decoding JSON\n";
            throw new FileNotFoundException(sprintf("%s", 'File Missing'));
        }

        // Seed database with JSON data
        foreach($data as $value){
           
            
            Civilization::firstOrCreate(Arr::only([
                'id' => $value['id'],
                'name' => $value['name'],
                'release_id' => $value['release_id'],
                'architecture' => $value['architecture'],
                'continent' => $value['continent'],
                'focus' => $value['focus'],
                'unique_units' => $value['unique_units'],
                'unique_technologies' => $value['unique_technologies'],
                'unique_buildings' => $value['unique_buildings'],
            ], (new \App\Models\Civilization)->getFillable()));
        }
    }
}
