<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $table = "hotels";
    protected $fillable = [
        'hot_name',
        'hot_price',
        'hot_address',
        'hot_details',
        'hot_type',
        'hot_image',
        'admin_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
