<header class="sticky-top">
    <div class="row">
        <nav class="col navbar">
            <a class="navbar-brand ml-4" href="{{ route('home') }}">
                <img class="d-inline-block align-top" src="/img/mainIcon.png" width="30" height="30" alt="">
                HIRUKURA
            </a>
            @guest
            <ul class="nav navbar-right mx-4">
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link p-1 active" href="{{ route('login') }}">ログイン</a>
                </li>
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link p-1" href="{{ route('register') }}">新規登録</a>
                </li>
            </ul>
            @else
            <ul class="nav navbar-right mx-2">
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link bg-info p-1" href="{{ route('posts.create') }}">レビュー投稿へ</a>
                </li>
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link p-1" href="{{ route('mypage') }}">{{Auth::user()->name }}さん</a>
                </li>
            </ul>
            @endguest
        </nav>
    </div>
</header>
