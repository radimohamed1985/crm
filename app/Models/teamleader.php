<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teamleader extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $gaurded =[];
}
