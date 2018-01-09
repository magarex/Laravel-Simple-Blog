<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'articlesname', 'category', 'articlesimage', 'articlescontent'
    ];
}
