<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MoviesController extends Controller
{
    //Top画面一覧表示
    public function index(){
        $movies = Movie::oldest()->get(); //created_idが古い順に取得してきて、その中にget。 latest()で古い順
        //$movies =[];
        //dd($movies->toArray());// ddはその場で処理しておわる
        return view('homes.top')->with('movies',$movies); //homesのフォルダ中のtopを返す,withでこの関数で定義した$moviesをmoviesって名前でviewと一緒に（with）returnします
    }

    //作品詳細
    public function show($id){
        $movie = Movie::findOrFail($id); //idをModel（web.php）の中から探してくる
        return view('movies.show')->with('movie',$movie);
    }
  
    //上映作品追加画面
    public function create(){
        return view('movies.create');
    }

    //上映作品追加処理
    public function store(Request $request){
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->content = $request->content;
        $movie->screening_start_date = $request->screening_start_date;
        $movie->screening_end_date = $request->screening_end_date;
        $movie->cast = $request->cast;
        $movie->staff = $request->staff;

        $movie->save();

        return redirect('/');
    }

    //作品情報編集画面へ
    public function editablelist(){
        $movies = Movie::oldest()->get();
        return view('movies.editablelist')->with('movies',$movies);
    }

    public function edit($id){
        $movie = Movie::findOrfail($id);
        // dd($movie);
        return view('movies.edit')->with('movie',$movie);
    }

    public function update(Request $request, Movie $movie){

    

        $movie->title = $request->title;
        $movie->content = $request->content;
        $movie->screening_start_date = $request->screening_start_date;
        $movie->screening_end_date = $request->screening_end_date;
        $movie->cast = $request->cast;
        $movie->staff = $request->staff;
       

        $movie->save();

        return redirect('/');
    }
}
