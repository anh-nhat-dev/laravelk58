<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comment";
    protected $primaryKey = "comm_id";

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
