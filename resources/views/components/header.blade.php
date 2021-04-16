<header class="sticky-top">
    <div class="row">
        <nav class="col-12 navbar">
            <a class="navbar-brand mx-5" href="{{ url('/home') }}">
                <img src="/img/mainIcon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                HIRUKURA
            </a>
            <ul class="nav navbar-right mx-5">
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link p-1 active" href="{{ url('/login') }}">ログイン</a>
                </li>
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link p-1" href="{{ url('/register') }}">新規登録</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
