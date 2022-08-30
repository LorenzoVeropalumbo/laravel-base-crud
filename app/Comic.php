<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'type',
        'thumb',
        'sale_date',
        'series',
        'price',
        'description'
    ];
}
