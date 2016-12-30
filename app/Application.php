<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        "user_id",
        "leave_type",
        "leave_reason",
        "leave_from",
        "leave_to"
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
