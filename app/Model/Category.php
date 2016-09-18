<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'name',
        'category_pic',
        'category_des',
        'title',
        'description',
        'sort',
    ];

    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
}
