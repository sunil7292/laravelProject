<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class User extends Model 
{
    //use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    
    protected $fillable = ['name', 'email', 'password'];
}
