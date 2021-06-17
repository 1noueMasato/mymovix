@extends('layouts.default')

@section('title', '作品情報作品')

@section('main')

    <a href="{{ url('/') }}">TOPへ戻る</a>
    <a href="{{ route('movies.editablelist') }}">一覧へ戻る</a>

    <div class="container">
        <div class="card">
            <div class="card-header">
                更新したい情報を入力してください。
            </div>
            <div class="card-body">
                <form action="{{ route('movies.update', $movie) }}" method="post">
                    {{-- ここでpatchを書いておかないとルーティングでgetでもなくpostでもなく、patchを使えない --}}
                    {{ method_field('patch') }}
                    {{-- @method('PATCH') --}}
                    {{ csrf_field() }}
                    {{-- フォームにはcsrf対策のこの記述がないとエラーになる --}}

                    <div class="form-group">
                        <label for="">タイトル</label>
                        <input type="text" name="title" class="form-control" placeholder=""
                            value="{{ old('title', $movie->title) }}" aria-describedby="">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="content">作品内容</label>
                        <textarea class="form-control auto-resize" name="content" id="content" cols="25"
                            rows="20">{{ old('content', $movie->content) }}</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">公開日</label>
                            <input type="date" name="screening_start_date" class="form-control" placeholder=""
                                value="{{ old('screening_start_date', $movie->screening_start_date) }}"
                                aria-describedby="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">公開終了日</label>
                            <input type="date" name="screening_end_date" class="form-control" placeholder=""
                                value="{{ old('screening_end_date', $movie->screening_end_date) }}" aria-describedby="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cast">出演者</label>
                        <textarea class="form-control" name="cast" id="cast" cols="25"
                            rows="10">{{ old('cast', $movie->cast) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="staff">製作者</label>
                        <textarea class="form-control" name="staff" id="staff" cols="25"
                            rows="10">{{ old('staff', $movie->staff) }}</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="eirin_id">映倫区分</label>
                            {!! Form::select('eirin_id', $eirin_divisions, $movie->eirin_id, ['class' => 'form-control col-6']) !!}
                            {{-- <select name="eirin_division" id="eirin_division">
                            @foreach ($eirin_divisions as $eirin_division)
                                <option value="{{ $eirin_division->code}}">{{ $eirin_division->eirin_division}}</option>
                            @endforeach
                        </select> --}}
                        </div>
                    </div>
                    {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">メイン画像</label>
                    <input type="file" class="form-control-file" id="main_img" name="main_img">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">作品詳細画像1</label>
                    <input type="file" class="form-control-file" id="main_img" name="main_img">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">作品詳細画像2</label>
                    <input type="file" class="form-control-file" id="main_img" name="main_img">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">作品詳細画像3</label>
                    <input type="file" class="form-control-file" id="main_img" name="main_img">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">作品詳細画像4</label>
                    <input type="file" class="form-control-file" id="main_img" name="main_img">
                </div> --}}
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

                    <p><input class="btn btn-primary" type="submit" value="変更を確定する"></p>
                </form>
            </div>
        </div>
    </div>
@endsection
