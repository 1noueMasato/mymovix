@extends('layouts.default')

@section('title', '上映作品追加')

@section('main')
    <script>
        $("textarea").attr("rows", 1).on("input", e => {
            $(e.target).height(0).innerHeight(e.target.scrollHeight);
        });
    </script>

    <a href="{{ url('/') }}">TOPへ戻る</a>


    <div class="container">


        <div class="card">
            <div class="card-header">
                上映する作品の情報を入力してください。
            </div>
            <div class="card-body">
                <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{-- フォームにはcsrf対策のこの記述がないとエラーになる --}}
                    <div class="form-group">
                        <label for="">タイトル</label>
                        <input type="text" name="title" class="form-control" placeholder="" value="{{ old('title') }}"
                            aria-describedby="">
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="content">作品内容</label>
                        <textarea class="form-control" name="content" id="content" cols="25" rows="20"
                            value="">{{ old('content') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">公開日</label>
                            <input type="date" name="screening_start_date" class="form-control" placeholder=""
                                value="{{ old('screening_start_date') }}" aria-describedby="">
                        </div>
                        <div class="form-group col-6">
                            <label for="">公開終了日</label>
                            <input type="date" name="screening_end_date" class="form-control" placeholder=""
                                value="{{ old('screening_end_date') }}" aria-describedby="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cast">出演者</label>
                        <textarea class="form-control" name="cast" id="cast" cols="25" rows="10"
                            value="">{{ old('cast') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="staff">製作者</label>
                        <textarea class="form-control" name="staff" id="staff" cols="25" rows="10"
                            value="">{{ old('staff') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="eirin_id">映倫区分</label>
                            {!! Form::select('eirin_id', $eirin_divisions, null, ['class' => 'form-control col-6']) !!}
                            {{-- <select name="eirin_division" id="eirin_division">
                            @foreach ($eirin_divisions as $eirin_division)
                                <option value="{{ $eirin_division->code}}">{{ $eirin_division->eirin_division}}</option>
                            @endforeach
                        </select> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">メイン画像</label>
                        <input type="file" class="form-control-file" id="main_img" name="main_img">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleFormControlFile1">作品詳細画像1</label>
                            <input type="file" class="form-control-file" id="detail_img_1" name="detail_img_1">
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleFormControlFile1">作品詳細画像2</label>
                            <input type="file" class="form-control-file" id="detail_img_2" name="detail_img_2">
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleFormControlFile1">作品詳細画像3</label>
                            <input type="file" class="form-control-file" id="detail_img_3" name="detail_img_3">
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleFormControlFile1">作品詳細画像4</label>
                            <input type="file" class="form-control-file" id="detail_img_4" name="detail_img_4">
                        </div>
                    </div>
                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}

                    <p><input class="btn btn-primary" type="submit" value="送信"></p>
                </form>
            </div>
        </div>

        {{-- <p><input type="text" name="title" placeholder="作品名を入力してください。" value="{{ old('title') }}"> --}}
        {{-- @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif --}}
        {{-- </p> --}}

        {{-- <p><textarea name="content" cols="25" rows="20" placeholder="作品内容を入力してください。">{{ old('content') }}</textarea> --}}
        {{-- @if ($errors->has('body'))
                <span class="error">{{ $errors->first('body') }}</span>
            @endif --}}
        {{-- </p> --}}

    @endsection
