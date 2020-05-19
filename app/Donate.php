<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','email','category','phone_number','address','author','condition','description',
    ];
}
