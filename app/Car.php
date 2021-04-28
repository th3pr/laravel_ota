<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = "cars";
    protected $fillable = [
        'car_model',
        'car_price',
        'car_details',
        'car_image',
        'user_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
