<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['id', 'category_id', 'name'];
    
    /**
     * A sub_categeory is owned by a categeory
     * @return type
     */
    public function category()
    {
        return $this->belongsTo('app\category');
    }
}
