<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =[
        'name',
        'title',
        'description',
        'main_pic',
        'content',
        'tag',
        'sort',
    ];
}
