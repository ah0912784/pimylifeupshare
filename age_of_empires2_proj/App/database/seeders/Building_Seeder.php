<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use \App\Models\Buildings;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;

class Building_Seeder extends Seeder
{
    //read json file
    public function run(): void
    {
        $fileLocation = '/data/additional-data/buildings.json';
        $json = File::get(storage_path('app/' . $fileLocation));
        $data = json_decode($json, true);
        $data = $data['buildings'];
        foreach($data as $item)
        {
            Buildings::firstOrCreate(Arr::only([
                'id'=> $item["id"],
                "name"=> $item["name"],
                'description'=> $item['description'],
                'release_id' => $item['release_id'],
                'age' => $item['age'],
                'population' => $item['population'],
                'building_function' => $item['use'],
                'cost'=> $item['cost'],
                'construction_time'=> $item['construction_time'],
                'size'=> $item['size'],
                'hitpoints'=> $item['hit_points'],
                'garrison'=> $item['garrison'],
                'attack'=> $item['attack'],
                'attack_bonus'=> $item['attack_bonuses'],
                'rate_of_fire'=> $item['rate_of_fire'],
                'projectile_range'=> $item['range'],
                'accuracy'=> $item['accuracy'],
                'projectile_speed'=> $item['projectile_speed'],
                'line_of_sight'=> $item['line_of_sight'],



            ],(new \App\Models\Buildings)->getFillable()));

        };
    }
}

// $table->id('id');
// $table->string('name');
// $table->text('description');
// $table->integer('release_id');
// $table->integer('age');
// $table->integer('population');
// $table->string('building_function');
// $table->string('cost');
// $table->integer('construction_time');
// $table->string('size');
// $table->integer('hitpoints');
// $table->integer('garrison');
// $table->string('attack');
// $table->string('attack_bonus');
// $table->decimal('rate_of_fire');
// $table->integer('projectile_range');
// $table->string('accuracy');
// $table->integer('projectile_speed');
// $table->integer('line_of_site');
// $table->timestamps();
// $table->primary('id');
// $table->foreign('id')->references('release_id')->on('releases');