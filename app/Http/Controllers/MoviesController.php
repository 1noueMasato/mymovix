<?php

namespace App\Http\Controllers;

use App\Models\Eirin;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\ScreeningTime;

class MoviesController extends Controller
{
    //Top画面一覧表示
    public function index(){
        $movies = Movie::oldest()->get(); //created_idが古い順に取得してきて、その中にget。 latest()で古い順
        // $movies = Movie::with('screeningTimes')->whereHas('screeningTimes',function($q){$q->where('screening_date', date("Y/m/d"));})->get();
        // $movies = ScreeningTime::with('movie')->where('screening_date', date("Y/m/d"))->get();
        //$movies =[];
        // dd($movies);
        // ddはその場で処理しておわる
        return view('homes.top')->with('movies',$movies); //homesのフォルダ中のtopを返す,withでこの関数で定義した$moviesをmoviesって名前でviewと一緒に（with）returnします
    }

    //作品詳細
    public function show($id){
        $movie = Movie::findOrFail($id); //idをModel（web.php）の中から探してくる
        // dd($movie->eirin->eirin_division);
        return view('movies.show')->with('movie',$movie);
    }
  
    //上映作品追加画面
    public function create(){
        // $eirin_divisions =[];
        $eirin_divisions = Eirin::oldest()->pluck('eirin_division','eirin_id'); //pluckは前がキーで、後ろがバリュー
        // $eirin_divisions = Eirin::oldest()->get();//formファザード使わない版
        // dd($eirin_divisions);
        return view('movies.create')->with('eirin_divisions',$eirin_divisions);
    }

    //上映作品追加処理
    public function store(Request $request){
        // dd($request->main_img);
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->content = $request->content;
        $movie->screening_start_date = $request->screening_start_date;
        $movie->screening_end_date = $request->screening_end_date;
        $movie->cast = $request->cast;
        $movie->staff = $request->staff;
        $movie->eirin_id = $request->eirin_id;
        
        //画像保存
        $movie_img = $request->file('main_img')->store('public/img/movie');
        
        //画像の名前取得・DBにファイル名のみ保存
        $movie->main_img = basename($movie_img);

        $movie->save();

        return redirect('/');
    }

    //編集する作品を選択する画面へ
    public function editablelist(){
        $movies = Movie::oldest()->get();
        return view('movies.editablelist')->with('movies',$movies);
    }

    //作品情報編集画面へ
    public function edit($id){
        $movie = Movie::findOrfail($id);
        $eirin_divisions = Eirin::oldest()->pluck('eirin_division','eirin_id');
        // $eirin_divisions = Eirin::oldest()->get(); //formファザード使わない版
        return view('movies.edit')->with('movie',$movie)->with('eirin_divisions',$eirin_divisions);
    }

    //更新処理
    public function update(Request $request, Movie $movie){
        $movie->title = $request->title;
        $movie->content = $request->content;
        $movie->screening_start_date = $request->screening_start_date;
        $movie->screening_end_date = $request->screening_end_date;
        $movie->cast = $request->cast;
        $movie->staff = $request->staff;
        $movie->eirin_id = $request->eirin_id;

        //画像を登録なおした場合のみ変更
        if($request->file('main_img') !== null){
            
            //画像保存
            $movie_img = $request->file('main_img')->store('public/img/movie');
            
            //画像の名前取得・DBにファイル名のみ保存
            $movie->main_img = basename($movie_img);
        }

        $movie->save();

        return redirect('/');
    }

    //論理削除処理
    public function stop(Movie $movie){
        // dd($movie);
        $movie->delete(); 
        return redirect()->back();
    }

    //公開停止中の作品一覧へ
    public function stoplist(){
        $movies = Movie::onlyTrashed()->get();
        return view('movies.stoplist')->with('movies',$movies);
    }

    //公開を再開する
    public function resume(Request $request){
        // dd($request->id);
       Movie::onlyTrashed()->where('id',$request->id)->restore();
        // Movie::withTrashed()->restore();
        // dd($movie);
        // $movie->restore();
        return redirect()->back();
    }
}
