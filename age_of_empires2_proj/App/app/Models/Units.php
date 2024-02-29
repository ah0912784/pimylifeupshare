<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'description',
        'release_id',
        'type',
        'age',
        'trained_at',
        'cost',
        'training_time',
        'hit_points',
        'attack',
        'attack_bonuses',
        'rate_of_fire',
        'melee_armor',
        'pierce_armor',
        'speed',
        'line_of_sight',
        'upgrades_to',
        'upgrade_cost',
        'upgrade_time',
    ];
}
