<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $fillable = [
        'menuname', 'menulink', 'menuicon'
    ];
}
