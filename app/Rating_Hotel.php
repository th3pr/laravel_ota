<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating_Hotel extends Model
{
    //
    protected $table = "rating_hotel";

    protected $fillable = [
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
