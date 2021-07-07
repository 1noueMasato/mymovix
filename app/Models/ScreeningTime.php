<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningTime extends Model
{
    use HasFactory;
    protected $fillable =[
        'movie_id',
        'screening_date',
        'screen_start_time_1',
        'screen_end_time_1',
        'screen_start_time_2',
        'screen_end_time_2',
        'screen_start_time_3',
        'screen_end_time_3',
        'screen_start_time_4',
        'screen_end_time_4',
        'screen_start_time_5',
        'screen_end_time_5'
    ];

    public function movie(){
        return $this->belongsTo('App\Models\Movie');
    }
}
