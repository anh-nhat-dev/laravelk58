<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "product";
    protected $primaryKey = "prod_id";

    public function user()
    {
        return $this->belongsToMany('App\Models\User', 'user-product', 'prod_id', 'user_id');
    }
}
