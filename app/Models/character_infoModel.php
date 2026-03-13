<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class character_infoModel extends Model
{
    protected $table = 'character_info';
    protected $fillable = ['name', 'anime', 'description', 'goals', 'icon'];
}
