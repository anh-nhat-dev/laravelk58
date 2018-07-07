<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table = "phone";

    protected $primaryKey = "phone_id";

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }
}
