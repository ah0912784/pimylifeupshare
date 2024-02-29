<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $table = "buildings";
    protected $fillable = [
        'id',
        'name',
        'description',
        'release_id',
        'age',
        'population',
        'building_function',
        'cost',
        'construction_time',
        'size',
        'hitpoints',
        'garrison',
        'attack',
        'attack_bonus',
        'rate_of_fire',
        'projectile_range',
        'accuracy',
        'projectile_speed',
        'line_of_sight',
    ];
}
