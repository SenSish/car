<?php

namespace App\Models;

use App\Models\Category;
use App\Models\CarCompany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    public function carcompany()
    {
    return $this->belongto(CarCompany::class,'id');
    }
    public function category()
    {
    return $this->belongto(Category::class,'id');
    }

}
