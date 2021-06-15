<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

    {{-- bootstrap
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">

    {{-- JQuery --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    <style>
        /* .container1 {
            width: 250px;
            height: 250px;
            margin-top: 20px;
            background: darkviolet;
            color: darkturquoise;
        } */

        .cover {
            background: url("/img/background/blue-cybernetic-background.jpg");
            background-size: cover;
        }

    </style>
</head>

<body>
    {{-- <script>
        $(function() {
        alert("jQuery");
        });
        </script> --}}


    <header>
        <div class=" alert alert-info text-center mb-0  alert-dismissible fade show"> 
            1件のお知らせがあります。
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
        <div class="container">
            <nav class=" navbar navbar-expand-sm navbar-light">
                <a href="" class="navbar-brand">Logo</a>
                <button class=" navbar-toggler" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="menu" class=" collapse navbar-collapse">
                    
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="" class="nav-link">Link</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Link</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Link</a></li>
                    </ul>
                </div>
            </nav>

        </div>
        <div class="cover text-center text-white py-5">
            <h1 class=" display-4 mb-5">WebSite </h1>
            <button class=" btn btn-lg bg-primary">Go!</button>
        </div>
    </header>
    <main>
        <img src="{{ asset('img/icon/eirin_g.jpg') }}" alt="">
        <div id="outarea_aa">outarea_aa</div>
        <section class=" py-5">
            <h2 class=" text-center mb-5">Features</h2>
            <div class="container">
                <div class="row text-center mb-5">
                    <div class=" col-sm-6  order-sm-1">
                        <div class="mb-5">
                            <h3>Awesome</h3>
                            <p>スマートフォンも利用可能</p>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-sm-2">
                        <img src="{{ url('/img/sample/smartphone1.jpeg') }}" class=" w-75">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <div>
                            <h3>Awesome</h3>
                            <p>パソコンからも利用可能</p>
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <img src="{{ url('/img/sample/notepc1.jpeg') }}" class=" w-75">
                    </div>
                </div>
            </div>
            {{-- sm以上のサイズになったときにこうなりますよ、と指定 --}}
            {{-- sm以下のサイズになったときは列の順番が消えて書いた順に並ぶ --}}
        </section>
        {{-- テーブル　コンテナの中にclass tableを追加 --}}
        <section class="bg-light text-center py-5">
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Plan A</th>
                            <th>Plan B</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AA</td>
                            <td>BB</td>
                        </tr>
                        <tr>
                            <td>AAA</td>
                            <td>BBB</td>
                        </tr>
                        <tr>
                            <td>AAAA</td>
                            <td>BBBB</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2 class="mb-5 text-center">How to use</h2>
            <div class="container">
                <ul class="nav nav-tabs">
                    {{-- aタグの中は空リンク --}}
                    <li class="nav-item"><a href="#ios" class="nav-link" data-toggle="tab">iOS</a></li>
                    <li class="nav-item"><a href="#android" class="nav-link active" data-toggle="tab">Android</a></li>
                </ul>
                <div class=" tab-content">
                    <div id="ios" class=" tab-pane active">
                        <p>Hello iOS. Hello iOS.<span class="font-weight-bold text-info" data-toggle="tooltip"
                                title="This is awesome" data-placement="bottom"> Hello iOS.</span> Hello iOS. Hello iOS.
                            Hello iOS. Hello iOS. Hello iOS. Hello
                            iOS.</p>
                    </div>
                    <div id="android" class=" tab-pane">
                        <p>Hello Android. Hello Android. Hello Android. Hello Android. Hello Android. Hello Android.
                            Hello Android. Hello Android. Hello Android.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class=" bg-light text-center py-5">
            <a href="#getitnow" class="btn btn-primary">Get It Now</a>
        </section>

    </main>
    <footer class="text-center text-muted py-4">
        権利元
    </footer>

    {{-- <div class="container"> --}}
    {{-- @yield('content')
        <div class=" display-4 bg-red">DAREDEVIL</div>
        <div class="text-center bg-success">BOX</div>
        <div class="text-right bg-success text-warning">BOX</div>
        <button class="test_jquery" onclick="test()">ボタン！</button>
        <button class=" btn btn-danger">Punisher</button> --}}
    {{-- <div class=" btn-danger">div</div> --}}


    {{-- 列を作りたいときは大きいdivで囲む。その下にrowクラスを作って囲む。 --}}
    {{-- <div class="row">
                <div class="col-1 col-md-2 bg-primary">1</div>
                <div class="col-1 col-md-3 bg-secondary">2</div>
                <div class="col-10 col-md-7 bg-info">3</div>
            </div> --}}
    {{-- 76px and up: sm
            768px and up: md
            992px and up: lg
            1200px and up: xl --}}
    {{-- <div class="row">
                <div class="col-3 col-md-7 bg-primary">1</div>
                <div class="col-4 col-md-1 bg-secondary">2</div>
                <div class="col-5 col-md-4 bg-info">3</div>
            </div>
    
            <div class="container1">
                <div class=" w-50 h-50 bg-success"> --}}
    {{-- 親要素に対しての比率を指定できる
                    コンテナw-50 h-50
                </div>
            </div>
    
            <div class="container1 float-lg-right">
                <div class="   my-5 bg-secondary"> --}}
    {{-- 親要素に対しての比率を指定できる --}}
    {{-- コンテナ my-1 px-1
                </div>
            </div> --}}
    {{-- </div> --}}


    <!--
        +    [p|m][location]-[size]
        +
        +    location:
        +    - t, b, l, r topbottomleftright
        +    - x, y 左右上下
        +
        +    size:
        +    - 0
        +    - 1: 0.25rem
        +    - 2: 0.5rem
        +    - 3: 1.0rem
        +    - 4: 1.5rem
        +    - 5: 3.0rem
        +    - auto
        +    -->







    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
