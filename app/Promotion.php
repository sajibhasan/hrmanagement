<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Promotion extends Model
{
    protected $fillable = [
        "user_id",
        "Promotion_Date",
        "previous_department",
        "present_department",
        "previous_designation",
        "present_designation",
        "previous_salary",
        "present_salary"
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
