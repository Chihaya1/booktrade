<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','image'];
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
