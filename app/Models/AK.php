<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AK extends Model
{
    use HasFactory;
    protected $table = "ak";
    protected $fillable = ['name','email','phone','image',];

  
}
