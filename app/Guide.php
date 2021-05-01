<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = "guides";
    protected $fillable = [
        'name',
        'image',
        'phone',
        'user_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
