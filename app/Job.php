<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        "position",
  "description",
        'contact',
        'address',
  "post_date",
  "last_date_to_apply",
  "close_date"
    ];
}
