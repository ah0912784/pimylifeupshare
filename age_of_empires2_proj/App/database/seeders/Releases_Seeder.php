<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use \App\Models\Releases;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
class Releases_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileLocation = "data/releases.json";
        $json = File::get(storage_path('app/' . $fileLocation));
        $data = json_decode($json, true);
        $data = $data['releases'];
        

        foreach($data as $item){
            Releases::firstOrCreate(Arr::only([
                'id'=> $item['id'],
                'name'=> $item['name'],
                'release_date'=> $item['release_date'],
            ],(new \App\Models\Releases)->getFillable()));
        }
    }
}
