<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use \App\Models\Technologies;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
class Technologies_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileLocation = '/data/additional-data/technologies.json';
        $json = File::get(storage_path('app/' . $fileLocation));
        $data = json_decode($json, true);
        $data = $data['technologies'];
         
        // Check if decoding was successful
        if ($data === null) {
            // Handle error (e.g., invalid JSON)
            echo "Error decoding JSON\n";
            throw new FileNotFoundException(sprintf("%s", 'File Missing'));
        }
    
        // Seed database with JSON data
        foreach($data as $value){
            Technologies::firstOrCreate(Arr::only([
                'id' => $value['id'],
                'name' => $value['name'],
                'release_id' => $value['release_id'],
                'age' => $value['age'],
                'researched_at' => $value['researched_at'],
                'cost' => $value['cost'],
                'research_time' => $value['research_time'],
                'effect' => $value['effect'],
            ],(new \App\Models\Technologies)->getFillable()));
        }
    }
}


        // "id" : 1,
		// "name" : "Town Watch",
		// "release_id" : 1,
		// "age" : 2,
		// "researched_at" : "Town Center",
		// "cost" : "75F",
		// "research_time" : 25,
		// "effect" : "Building LOS +4"