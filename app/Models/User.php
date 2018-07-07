<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class User extends Model
{
    //
    protected $table = "user";
    protected $primaryKey = "user_id";

    public function phone()
    {
        return $this->hasOne('App\Models\Phone', 'user_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment','user_id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Models\Product', 'user-product','user_id', 'prod_id');
    }

}
