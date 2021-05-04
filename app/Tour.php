<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Tour extends Model
{
//    use LogsActivity;

    protected $table = "tours";
    protected $fillable = [
        'tour_name',
        'tour_price',
        'tour_address',
        'start_date',
        'end_date',
        'tour_review',
        'tour_discount',
        'tour_details',
        'tour_image',
        'user_id',
        'tour_guide_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function searchableAs()
    {
        return 'tour_name';
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
//    protected static $logFillable = true;
//    protected static $logName = 'tour';
//    protected static $logOnlyDirty = true;
//    public function setStatusAttribute($status)
//    {
//        $this->attributes['status'] = ($status)? 1 : 0;
//    }


public function users()
{
    return $this->belongsToMany('App\User', 'book_tour' ,'user_id', 'tour_id' , 'id' , 'id');
}

public function ratings()
{
    return $this->hasMany('App\Rating_Tour');
} 




}
