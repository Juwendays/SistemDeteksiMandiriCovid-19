<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name','emailadmin','password'];

    // public function getFullNameAttribute()
    // {
    //     if (is_null($this->emailadmin)) {
    //         return "{$this->name}";
    //     }

    //     return "{$this->name} {$this->emailadmin}";
    // }
}
