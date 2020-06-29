<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category','author','price','condition',
    ];
}
