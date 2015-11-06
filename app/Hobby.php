<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name'];
    
    public function users() {
        return $this->belongsTo('app\User');
    }
}
