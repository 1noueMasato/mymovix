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
            <button type="button" class="btn" style="background-color:#DDDDDD">日別上映スケジュール<br>鑑賞の日程が決まっている方はこちら</button>
            <button type="button" class="btn btn-dark">週別上映スケジュール<br>鑑賞の日程が決まっていない方はこちら</button>
        </div>
        <div style="background-color:#DDDDDD">
            <div class="container">


                <?php
                // movieのidのみを入れた配列を作成
                $screenTimeMovieIdsArray = array_column($screeningTimes, 'movie_id');
                
                //上映スケジュールの配列データ要素数
                $screeningTimesCount = count($screeningTimes);
                
                ?>

                @forelse($movies as $movie)


                    <?php
                    
                    //それぞれの映画の上映スケジュールだけを入れるリスト
                    $screeningTimeList = [];
                    
                    // movieのidだけの配列（screenTimeMovieIdsArray）から、screeningTimeのmovie_idとmovieのidが等しいデータが入ってる、配列の番号を取得
                    //この映画のidの上映スケジュールデータが入っている配列の番号はscreenTimeMovieIdsArrayNum
                    $movieId = $movie->id;
                    $screenTimeMovieIdsArrayNum = array_search($movieId, $screenTimeMovieIdsArray);
                    
                    //第何回の上映時間かをカウントする変数
                    $count = 1;
                    
                    for ($i = 0; $i < 5; $i++) {
                        $screeningStartTime = 'screen_start_time_' . $count;
                        $screeningEndTime = 'screen_end_time_' . $count;
                    
                        if (isset($screeningTimes[$screenTimeMovieIdsArrayNum][$screeningStartTime])) {
                            //上映開始時間がnullなら処理をストップ
                    
                            //screeningTimesのidが同じ番号の中の$count目の上映開始終了時間を変数に入れる
                            $screeningStartAndEndTime = [$screeningStartTime => $screeningTimes[$screenTimeMovieIdsArrayNum][$screeningStartTime], $screeningEndTime => $screeningTimes[$screenTimeMovieIdsArrayNum][$screeningEndTime]];
                    
                            //上映開始終了時間を$screeningTimeListの中に追加する
                            array_push($screeningTimeList, $screeningStartAndEndTime);
                    
                            //次の上映開始終了時間の変数の処理へ
                            $count++;
                        } else {
                            break;
                        }
                    }
                    
                    //null判定
                    //定義されててnullじゃなければtrue
                    // dd(isset($screeningTimeList[3]['screen_start_time_4']));
                    
                    //nullならtrue
                    // empty($screeningTimeList[3]['screen_start_time_4']);
                    
                    ?>

                    <div class=" list-group py-3">
                        <div class=" list-group-item" style="background-color: #808080">
                            <?php $id = 'movie' . $movie->id; ?>
                            <div class="accordion" id="{{ 'accordion-' . $id }}">
                                <div class="container">
                                    <div class="row">
                                        <h3 class=" col-10">{{ $movie->title }}</h3>
                                        <div class=" text-right col-2">
                                            <button id="top-accordion-button" class=" btn-gray rounded-circle p-0"
                                                type="button" data-toggle="collapse"
                                                data-target="{{ '#collapse-' . $id }}" aria-expanded="true"
                                                aria-controls="{{ 'collapse-' . $id }}" style="width:2rem;height:2rem;">
                                                <h3 id="top-accordion-button-icon">-</h3>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="{{ 'collapse-' . $id }}" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="{{ '#accordion-' . $id }}">
                                    <div class=" container">
                                        <div class="row">
                                            <?php $main_img = $movie->main_img; ?>
                                            <img src="{!! asset('storage/img/movie/' . $main_img) !!}" class="w-25 h-25 col-2" alt="">

                                            @foreach ($screeningTimeList as $screeningTime)
                                                {{-- 上映スケジュールのリスト番号と、第何回の上映回かを表す変数を繰り返しの前に定義 --}}

                                                <div class=" col-2 px-0" style="border: solid; border-color:#808080;">
                                                    <div style="background-color: #808080" class="w-100 py-2">シアター１</div>

                                                    <?php
                                                    $index = $loop->index;
                                                    $screeningTimeNum = $index + 1;
                                                    $startTime = 'screen_start_time_' . $screeningTimeNum;
                                                    $endTime = 'screen_end_time_' . $screeningTimeNum;
                                                    // dd($screeningTimeList[$index][$startTime]);
                                                    ?>

                                                    <div style="background-color:white" class="h-75">
                                                        {{ $screeningTimeList[$index][$startTime] }}
                                                        <br>~<br>
                                                        {{ $screeningTimeList[$index][$endTime] }}

                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
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
