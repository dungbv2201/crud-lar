<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $perPage = 5;

    protected $casts =[
        'created_at' => 'datetime:Y-m-d'
    ];
    protected $dates = [
        'created_at',
    ];
    protected $fillable =['name'];
//    protected $guarded =[];
}
