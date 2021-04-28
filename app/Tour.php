<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
      protected $table = "tours";
    protected $fillable = [
        'tour_name',
        'tour_price',
        'tour_address',
        'start_date',
        'end_date',
        'tour_review',
        'tour_details',
        'tour_image',
        'tour_discount',
        'admin_id',
        'tour_guide_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
