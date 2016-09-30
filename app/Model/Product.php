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
        'category_id',
        'des',
        'content',
        'title',
        'description',
        'sort',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
