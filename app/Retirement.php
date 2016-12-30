<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retirement extends Model
{
    protected $fillable = [
        "user_id",
        "retirement_date",
        "award",
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
