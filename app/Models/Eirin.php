<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eirin extends Model
{
    use HasFactory;
    protected $fillable =[
        'code',
        'eirin_division',
        'eirin_division_icon',
        'eirin_division_explain'
    ];
}
