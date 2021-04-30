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
//    protected static $logFillable = true;
//    protected static $logName = 'tour';
//    protected static $logOnlyDirty = true;
//    public function setStatusAttribute($status)
//    {
//        $this->attributes['status'] = ($status)? 1 : 0;
//    }
}
