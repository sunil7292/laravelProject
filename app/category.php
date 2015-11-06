<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['id', 'name'];
    
    /**
     *A categeory can have many sub categeory
     *  
     * @return type
     */
    public function subCategory()
    {
        return $this->hasMany('app\sub_category');
    }
}
