<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name',
        'main_pic',
        'category_pic',
        'category_des',
        'des',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
