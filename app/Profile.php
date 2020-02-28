<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','phone', 'address', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
