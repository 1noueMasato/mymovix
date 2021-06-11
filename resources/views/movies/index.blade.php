@extends('layouts.default')

@section('title', '令和を彩る声優の名曲')

@section('content')

    <h1>声優　名曲集</h1>
    <div class="header-container">
        <h2><a href="{{ url('/posts/create') }}">NewPost</a></h2>
    </div>
    <ul>
        <!-- 受け取った値を中身が空になるまでひとつひとつをpostとして出す -->
        {{-- @foreach ($posts as $post) 
<li><a href="">{{$post->title}}</a></li>
<li><a href="">{{$post->body}}</a></li>
@endforeach --}}

        @forelse($posts as $post)
            {{-- <li><a href="http://" target="_blank" rel="noopener noreferrer">{{ $post->title }}</a></li> --}}
            {{-- <li><a href="http://192.168.10.101:8000/posts/{{$post->id}}" target="_blank" rel="noopener noreferrer">{{ $post->body }}</a></li> --}}
            <li>
                <a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
                <a href="{{ action('App\Http\Controllers\PostsController@edit',$post->id) }}" class="edit">[Edit]</a>

                
                <a href="#" class="del" data-id="{{ $post->id }}">[×]</a> 
                <form method="POST" action="{{ url('posts', $post->id) }}" id="form_{{ $post->id }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                </form>

            </li>
        @empty
            <li>夢はかなった瞬間始まるんじゃない　そこ}}にたどり着くことを決めた日に　始まっていると私は思うの　傷痕　涙もいつか輝く</li>
        @endforelse
    </ul>

    <script src="{{asset('/js/main.js')}}"></script>
@endsection
