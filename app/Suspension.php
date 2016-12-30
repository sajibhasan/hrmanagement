<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suspension extends Model
{
    protected $fillable = [
        "user_id",
        "suspension_date",
        "reason",
        "duration",
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
