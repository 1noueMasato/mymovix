<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'screening_start_date',
        'screening_end_date',
        'cast',
        'staff',
        'main_img',
        'detail_img_1',
        'detail_img_2',
        'detail_img_3',
        'detail_img_4',    
    ];
}
