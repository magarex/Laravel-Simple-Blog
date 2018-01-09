<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homepagesettings extends Model
{
    

	protected $fillable = [
        'logo', 'title', 'facebook','twitter','google','linkedin','aboutus','dailyvideo','not1','not2','footer'
    ];


}
