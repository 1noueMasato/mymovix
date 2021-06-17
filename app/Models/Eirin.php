<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eirin extends Model
{
    use HasFactory;
    protected $fillable =[
        'eirin_id',
        'eirin_division',
        'eirin_division_icon',
        'eirin_division_explain'
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function movies(){
        return $this->hasMany('App\Models\Movie');
    }
}
