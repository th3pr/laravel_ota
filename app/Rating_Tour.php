<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating_Tour extends Model
{
    protected $table = "rating_tour";

    protected $fillable = [
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
