<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTour extends Model
{
    //
    protected $table = "book_tour";
    protected $fillable = [
        'book_date',
        'persons',
        'tour_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

}
