<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eirin;

class EirinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eirin = new Eirin(
            [
            'eirin_id'=> '1',
            'eirin_division'=>'G', //Ｇ：General Audience（すべての観客）の略号 
            'eirin_division_icon'=>'img/icon/eirin_g.jpg', //asset()でこのパスを指定する。
            'eirin_division_explain'=>'どなたでもご覧になれます'
        ]
        );

        $eirin->save();

        $eirin = new Eirin(
            [
            'eirin_id'=> '2',
            'eirin_division'=>'PG12', //ＰＧ：Parental Guidance（親の指導・助言）の略号
            'eirin_division_icon'=>'img/icon/eirin_pg12.jpg',
            'eirin_division_explain'=>'小学生には助言・指導が必要'
        ]
        );

        $eirin->save();
        
        $eirin = new Eirin(
            [
            'eirin_id'=> '3',
            'eirin_division'=>'R15+', //Ｒ：Restricted（観覧制限）の略号 
            'eirin_division_icon'=>'img/icon/eirin_r15.jpg',
            'eirin_division_explain'=>'15 歳以上がご覧になれます'
        ]
        );

        $eirin->save();

        $eirin = new Eirin(
            [
            'eirin_id'=> '4',
            'eirin_division'=>'R18+', //Ｒ：Restricted（観覧制限）の略号 
            'eirin_division_icon'=>'img/icon/eirin_r18.jpg',
            'eirin_division_explain'=>'18 歳以上がご覧になれます '
        ]
        );

        $eirin->save();
        
       

    }
}