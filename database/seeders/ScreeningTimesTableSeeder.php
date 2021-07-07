<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScreeningTime;

class ScreeningTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $screeningTime = new ScreeningTime([
            'movie_id'=>'2',
            'screening_date'=>date("Y/m/d"),
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();

        $screeningTime = new ScreeningTime([
            'movie_id'=>'1',
            'screening_date'=>date("Y/m/d"),
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();

        $screeningTime = new ScreeningTime([
            'movie_id'=>'3',
            'screening_date'=>date("Y/m/d"),
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();
        $screeningTime = new ScreeningTime([
            'movie_id'=>'2',
            'screening_date'=>'2099/01/11',
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();

        $screeningTime = new ScreeningTime([
            'movie_id'=>'1',
            'screening_date'=>'2099/01/11',
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();

        $screeningTime = new ScreeningTime([
            'movie_id'=>'3',
            'screening_date'=>'2099/01/11',
            'screen_start_time_1'=>'9:00',
            'screen_end_time_1'=>'10:00',
            'screen_start_time_2'=>'11:00',
            'screen_end_time_2'=>'12:00',
            'screen_start_time_3'=>'13:00',
            'screen_end_time_3'=>'14:00',
            'screen_start_time_4'=>'15:00',
            'screen_end_time_4'=>'16:00',
            'screen_start_time_5'=>'20:00',
            'screen_end_time_5'=>'22:00'
        ]);

        $screeningTime->save();
    }
}
