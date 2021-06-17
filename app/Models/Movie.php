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
        'eirin_id',
        'main_img',
        'detail_img_1',
        'detail_img_2',
        'detail_img_3',
        'detail_img_4',    
    ];

    public function eirin(){
        return $this->belongsTo('App\Models\Eirin');
    }

    //リレーションシップの記述法
    //１：2つのModelにリレーションを記述（1対多など）。
    //２：親（1対多の1）のほうは自分のカラムの中の「id」、子は自分のカラムの中の「親のモデル名_id」を紐づける。
}
