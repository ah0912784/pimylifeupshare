<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Releases extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'release_date',
        
    ];
}
