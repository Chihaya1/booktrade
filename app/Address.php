<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id','first_name','last_name','address','province','card_number',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
