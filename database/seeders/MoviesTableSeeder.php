<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        $movie = new Movie([
            'title'=>'ダークアベンジャーズ：アセンブル',
            'content'=>'かつて、悪鬼グリーンゴブリンとして世間を騒がせた男、ノーマン・オズボーン。彼が一夜にして英雄に祭り上げられた。今を好機と見たオズボーンは、その勢力をさらに拡大すべく新たな計略に打って出る。ニューアベンジャーズ、マイティ・アベンジャーズに続く第三のチームにして、最凶最悪のアベンジャーズ「ダークアベンジャーズ」ここに登場！',
            'screening_start_date'=>'2021/4/1',
            'screening_end_date'=>'2021/12/31',
            'cast'=>'ノーマン・オズボーン、ムーンストーン、ダケン・アキヒロ、アレス、マック・ガーガン、マーベル・ボーイ、セントリー、ブルズアイ',
            'staff'=>'ザック・スナイダー、ジョス・ウェドン、ルッソ・ブラザーズ',
            'eirin_id'=>'1',
            'main_img'=>'DARK_AVENGERS_ASSEMBLE_main.jpg'
        ]);

        $movie->save();

        $movie = new Movie([
            'title'=>'ダークアベンジャーズ：モレキュールマン',
            'content'=>'危ういながらも船出を果たしたダークアベンジャーズだったが、早くも絶対の強敵が立ちはだかる。その名はモレキュールマン。分子を意のままにするこの恐るべき敵を相手に、ダークアベンジャーズは如何に勝利するのか？',
            'screening_start_date'=>'2021/4/1',
            'screening_end_date'=>'2021/12/31',
            'cast'=>'ノーマン・オズボーン、ムーンストーン、ダケン・アキヒロ、アレス、マック・ガーガン、マーベル・ボーイ、セントリー、ブルズアイ',
            'staff'=>'ザック・スナイダー、ジョス・ウェドン、ルッソ・ブラザーズ',
            'eirin_id'=>'3',
            'main_img'=>'DARK_AVENGERS_MOLECULEMAN_main.jpg'
        ]);

        $movie->save();

        $movie = new Movie([
            'title'=>'ダークアベンジャーズ：シージ',
            'content'=>'ダークアベンジャーズ崩壊！アスガルドを舞台に激突する正義と悪の軍勢。最終決戦の裏でついに明かされるセントリーの真実とは何か？ノーマン・オズボーン以下、ダークアベンジャーズに関わった全ての人間の命運が決するシリーズ完結編、ここに登場！',
            'screening_start_date'=>'2021/4/1',
            'screening_end_date'=>'2021/12/31',
            'cast'=>'ノーマン・オズボーン、ムーンストーン、ダケン・アキヒロ、アレス、マック・ガーガン、マーベル・ボーイ、セントリー、ブルズアイ',
            'staff'=>'ザック・スナイダー、ジョス・ウェドン、ルッソ・ブラザーズ',
            'eirin_id'=>'4',
            'main_img'=>'DARK_AVENGERS_SIEGE_main.jpg'
        ]);

        $movie->save();

    }
}
