<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable=[
        'fname','lname','email','phone_no','city','address','zip','dob','message_body','further'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
