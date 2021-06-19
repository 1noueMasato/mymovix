@extends('layouts.default')

@section('title', '作品詳細')

@section('header')
    <nav class="navbar  navbar-light bg-light mb-5">
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> --}}
        <div class="navbar-toggler-icon"></div>
        {{-- </button> --}}
        <h1 class="d-inline">MOVIX</h1>
        <h1 class=" text-right mr-2  float-right d-inline-block">本日はメンズデイ　￥1200</h1>
    </nav>
@endsection

@section('main')

    <a href="{{ url('/') }}">TOPへ戻る</a>
    <div class="bg-secondary">
        <div class="container">
            <div class=" list-group py-3">
                <div class=" list-group-item bg-light">
                    <h3>{{ $movie->title }}</h3>
                    <div class="row w-75 h-75">
                        <?php $main_img = $movie->main_img; ?>
                        <img src="{!! asset('storage/img/movie/'.$main_img) !!}" class="img-fluid"  alt="">
                    </div>
                    <div>
                        <div class=" d-inline-block" style="background-color: darkgray">STORY</div>
                        <p>{{ $movie->content }}</p>
                    </div>
                    <div>
                        <div class=" d-inline-block" style="background-color: darkgray">出演者</div>
                        <p>{{ $movie->cast }}</p>
                    </div>
                    <div>
                        <div class=" d-inline-block" style="background-color: darkgray">スタッフ</div>
                        <p>{{ $movie->staff }}</p>
                    </div>
                    @if ($movie->eirin_id !== 1)
                        <div class=" d-inline-block" style="background-color: darkgray">映倫区分</div>
                        <p>{{ $movie->eirin->eirin_division}}</p>
                        <div class="row">
                            <div class=" col-2">
                                <img src="{!! asset($movie->eirin->eirin_division_icon) !!}" class="img-fluid"  alt="">
                                {{-- <img src="{!! asset(strval($movie->eirin->eirin_division_icon)) !!}" class="img-fluid"  alt=""> --}}
                            </div>
                        </div>
                        {{-- <img src="{{asset('img/background/blue-cybernetic-background.jpg')}}" alt=""> --}}
                        {{-- <img src="{{ asset('img/icon/eirin_r15.jpg') }}" alt=""> --}}
                        {{-- 画像を読み込ませるときはalt=""が必須 +みたいな記号も使わないほうが良い--}}
                        
                    @endif
                </div>
            </div>   
        </div>
    </div>

@endsection
    {{-- <a href="{{ url('/') }}" class="header-menu" class="header-container">一覧へ戻る</a>

    <h1>
        {{ $post->title }}
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>
    <ul>
        @forelse ($post->comments as $comment)
        <li>
            {{ $comment->body }} 
            {{ $comment->id }}
            <a href="#" class="del" data-id="{{ $comment->id }}">[×]</a> 
            <form method="POST" action="{{ route('comments.destroy', [$post, $comment])  }}" id="form_{{ $comment->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            </form>
        </li>
            
        @empty
            <li>コメントがありません</li>
        @endforelse
    </ul>
    <form action="{{ action('App\Http\Controllers\CommentsController@store', $post) }}" method="post">

        {{ csrf_field() }}
        {{-- フォームにはcsrf対策のこの記述がないとエラーになる --}}
{{-- 
        <p>
            <input type="text" name="body" placeholder="コメントを入力してください" value="{{ old('body') }}">
            @if ($errors->has('body'))
                <span class="error">{{ $errors->first('body')}}</span>
            @endif
        </p>
        <p><input type="submit" value="送信"></p>
    </form>
    <script src="{{asset('/js/main.js')}}"></script> --}}
    {{-- @foreach ($post->comments as $comment)
        <p>{{$comment->$body}}</p><br>
    @endforeach --}}
