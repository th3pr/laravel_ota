<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTour extends Model
{
    //
    protected $table = "book_tour";
    protected $fillable = [
        'persons',
        'tour_id',
        'user_id',
        'book_date',
        'created_at',
        'updated_at'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    // public function tour()
    // {
    //     return $this->belongsTo('App\Tour');
    // }





    

}
