<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    
    {{-- jquery&bootstrap読み込み --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    {{-- css読み込み --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    
    <title>@yield('title')</title>
</head>

<body>
    <header>
        @yield('header')
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        @yield('footer')
    </footer>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
