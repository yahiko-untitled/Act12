<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Superheroe extends Model
{
    use SoftDeletes; // Habilita borrado suave

    protected $fillable = ['real_name', 'hero_name', 'photo', 'additional_info'];
}
