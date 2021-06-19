@extends('layouts.default')

@section('title', 'Movix')

@section('header')

    <nav class="navbar  navbar-light bg-light mb-5">
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> --}}
        <div class="navbar-toggler-icon"></div>
        {{-- </button> --}}
        <h1 class="d-inline">MOVIX</h1>
        <h3 class=" text-right mr-2  float-right d-inline-block">本日はメンズデイ　￥1200</h3>
    </nav>

@endsection

@section('main')
    <section>
        <div class="mb-3" style="background-color:darkgray">
            <div class="container">
                <div class="row">
                    <button class=" col-2 btn btn-menu" style="height:60px;">上映スケジュール</button>
                    <button class=" col-2 btn btn-menu">上映作品</button>
                    <button class=" col-2 btn btn-menu">お知らせ</button>
                    <button class=" col-2 btn btn-menu">施設・売店案内</button>
                    <button class=" col-2 btn btn-menu">サービス</button>
                    <button class=" col-2 btn btn-menu">アクセス</button>
                </div>
            </div>
        </div>

    </section>
    <div class="d-grid gap-2 text-center">
        <button class="btn btn-primary" type="button">チケットを購入する</button>
        <button class="btn button-success" type="button"><a href="{{ route('movies.create') }}"> 上映作品を追加</a></button>
        <button class="btn button-success" type="button"><a href="{{ route('movies.editablelist') }}">
                作品情報を更新・公開停止</a></button>
    </div>
    <section class="py-5">
        <div class="text-center">
            <button type="button" class="btn btn-secondary">日別上映スケジュール<br>鑑賞の日程が決まっている方はこちら</button>
            <button type="button" class="btn btn-dark">週別上映スケジュール<br>鑑賞の日程が決まっていない方はこちら</button>
        </div>
        <div class="bg-secondary">
            <div class="container">
                @forelse($movies as $movie)
                    <div class=" list-group py-3">
                        <div class=" list-group-item bg-light">
                            <h3>{{ $movie->title }}</h3>
                            <div class="row">
                                <?php $main_img = $movie->main_img; ?>
                                <img src="{!! asset('storage/img/movie/'.$main_img) !!}" class="w-25 h-25"  alt="">
                            </div>
                            {{-- routeで引数送る場合は()内に記述 --}}
                            <a href="{{ route('movies.show', [$movie->id]) }}">作品詳細</a>
                            @if ($movie->eirin_id !== 1)
                                <div class="row my-1">
                                    <div class=" border border-dark rounded-circle col-1 text-center">
                                        {{ $movie->eirin->eirin_division }}</div>
                                </div>
                                {{-- <div class="row">
                                    <div class=" col-2 "> --}}
                                        {{ $movie->eirin->eirin_division_explain }}
                                    {{-- </div>
                                </div> --}}
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="list-group py-3">
                        <div class=" list-group-item bg-light">
                            上映中の作品はありません。
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    </section>

@endsection
