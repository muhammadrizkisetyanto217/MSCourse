<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
   use HasFactory, SoftDeletes;

//* Data yang boleh dimasukkan oleh pengguna hanya yang diisi dibawah ini saja 
    protected $fillable = [
        'name',
        'slug',
        'icon',
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
