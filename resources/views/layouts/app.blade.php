<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>hirukura - @yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hirukura.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-0">
        @component('components.header')
        @endcomponent

        <main class="">
            @yield('content')
        </main>

        @component('components.footer')
        @endcomponent
    </div>
</body>
</html>