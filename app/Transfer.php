<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        "user_id",
        "transfer_date",
        "previous_campus",
        "present_campus",
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
