<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

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
    protected static $logFillable = true;
    protected static $logName = 'car';
    protected static $logOnlyDirty = true;
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
}
