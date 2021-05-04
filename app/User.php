<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
// use App\Tour;


use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{

    use Notifiable, HasRoles, LogsActivity, ThrottlesLogins;
    protected static $ignoreChangedAttributes = ['password'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'profile_photo', 'status'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected static $logFillable = true;
    protected static $logName = 'user';
    protected static $logOnlyDirty = true;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = ($status)? 1 : 0;
    }
    public function setPasswordAttribute($password)
    {
        if(Hash::needsRehash($password)){
            $password = Hash::make($password);
            $this->attributes['password'] = $password;
        }
    }
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function hotels()
    {
        return $this->hasMany('App\Hotel');
    }
    public function tour()
    {
        return $this->hasMany('App\Tour');
    }
    public function cars()
    {
        return $this->hasMany('App\Car');
    }
     

    public function booktours()
    {
        return $this->belongsToMany('App\Tour', 'book_tour', 'user_id' ,'tour_id'  , 'id' , 'id');  
    }
    public function bookhotels()
    {
        return $this->belongsToMany(Hotel::class, 'book_hotel', 'user_id', 'hotel_id');
    }
    public function bookcars()
    {
        return $this->belongsToMany(Car::class, 'book_car', 'user_id', 'car_id');
    }
}
