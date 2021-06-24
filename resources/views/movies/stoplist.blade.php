@extends('layouts.default')

@section('title', '作品詳細')

@section('main')

    <a href="{{ url('/') }}">TOPへ戻る</a><br>
    <a href="{{ route('movies.editablelist') }}">公開中の作品一覧へ</a>
    <div class="container">
        <div class="card">
            <div class=" card-header">
                公開停止中の作品一覧
            </div>
            <div class=" card-body">
                @forelse($movies as $movie)
                    <div class=" list-group py-3">
                        <div class=" list-group-item bg-light">
                            <div class="row">
                                <h3 class="col-6">{{ $movie->title }}</h3>
                                {{-- routeで引数送る場合は()内に記述 --}}
                                {{-- <a href="{{ route('movies.edit', [$movie->id]) }}" class="col-2">作品情報を更新</a> 全く同じなのにここだけできない…--}}
                                <a href="{{ route('movies.resume', $movie->id) }}" class="col-2">公開を再開する</a>
                                <a href="#" class="col-2 text-danger">作品情報を削除</a>
                            </div>
                            <p class=" d-inline-block mr-5">公開開始：{{ $movie->screening_start_date }}</p>
                            <p class=" d-inline-block">公開終了：{{ $movie->screening_end_date }}</p>
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

    </div>

@endsection
