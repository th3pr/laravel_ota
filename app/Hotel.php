<?php

namespace App;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Hotel extends Model
{
    use HasFactory;
    use LogsActivity;

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
        'user_id ',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    protected static $logFillable = true;
    protected static $logName = 'hotel';
    protected static $logOnlyDirty = true;
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
}
