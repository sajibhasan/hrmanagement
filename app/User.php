<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Promotion;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        'image',
        "date",
        "gender",
        "phone",
        "qualification",
        "address",
        "paddress",
        "email",
        "password",
        "is_a",
        "employeeid",
        "department",
        "designation",
        "dateofjoining",
        "optradio",
        "Salary",
        "bankname",
        "accountholder",
        "accountnum"
    ];
    protected $guarded = ['is_a'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->hasOne('App\Promotion');
    }
}
