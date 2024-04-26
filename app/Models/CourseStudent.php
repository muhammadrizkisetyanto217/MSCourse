<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseStudent extends Model
{

    //? Merupakan pivot table sehingga relasinya tidak diatur 
    use HasFactory,SoftDeletes;
    protected $fillable= [
        'user_id',
        'course_id',
    ];
}
