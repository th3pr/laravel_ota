<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCar extends Model
{
    protected $table = "book_car";
    protected $fillable = [
        'day_recieve',
        'days',
        'car_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
