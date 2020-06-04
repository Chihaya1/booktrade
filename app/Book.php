<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','category_id','isbn','title','author','description','price','image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
        {
            return $this->belongsTo(User::class);
        }
    
}
