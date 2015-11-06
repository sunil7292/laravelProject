<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    
    protected $fillable = ['id', 'category_id', 'sub_category_id', 'image_name', 'description'];
}
