<?php

namespace App;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class Users extends Model implements AuthenticatableContract,CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    
    protected $fillable = ['name', 'email', 'password', 'role', 'image'];
}
