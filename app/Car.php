<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Car extends Model
{

    protected $table = "cars";
    protected $fillable = [
        'car_model',
        'car_price',
        'car_details',
        'car_image',
        'user_id',
        'discount',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function searchableAs()
    {
        return 'car_model';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
//    protected static $logFillable = true;
//    protected static $logName = 'car';
//    protected static $logOnlyDirty = true;
//    public function setStatusAttribute($status)
//    {
//        $this->attributes['status'] = ($status)? 1 : 0;
//    }

public function users()
{
    return $this->belongsToMany('App\User', 'book_tour' ,'user_id', 'tour_id' , 'id' , 'id');
}


}
