<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookHotel extends Model
{
    //
    protected $table = "book_hotel";
    protected $fillable = [
        'check_in_date',
        'check_out_date',
        'hotel_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
    
}
