<?php

namespace App;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Hotel extends Model
{
//    use HasFactory;
//    use LogsActivity;

    protected $table = "hotels";
    protected $fillable = [
        'hot_name','hot_price','hot_address','hot_details','hot_image','hot_type','user_id','discount','created_at','updated_at'
    ];
    protected $hidden = ['created_at','updated_at'];

    public function searchableAs()
    {
        return 'hot_name';
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
//    protected static $logFillable = true;
//    protected static $logName = 'hotel';
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
            return $this->hasMany('App\Rating_Hotel');
        }


}
