<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'location',
        'introduction',
        'cost',
    ];

    protected $casts = [
        'cost' => 'int',
    ];
}
