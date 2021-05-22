@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

        <h1>マイページ</h1>

        <hr>

        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="name" class="text-md-left">氏名</label>
                    <p class="text-center">{{Auth::user()->name }}</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col">
                    <label for="name" class="text-md-left">メールアドレス</label>
                    <p class="text-center">{{Auth::user()->email }}</p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12 text-center">
                    <a type="button" class="btn btn-primary" href="{{route('mypage.edit')}}">プロフィール編集へ</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <a type="button" class="btn btn-primary" href="{{route('mypage.show')}}">過去投稿一覧へ</a>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('mypage.edit_password') }}">
                        パスワード変更
                    </a>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col text-center">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-link mb-12" data-toggle="modal" data-target="#testModal">退会</button>
                    </div>
                </div>
            </div>

            <!-- ポップアップ画面 -->
            <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>退会確認画面</h4>
                        </div>
                        <div class="modal-body">
                            <label>本当に退会しますか？</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>

                            <form action='{{ route('article_delete') }}' method='post'>
                                {{ csrf_field() }}
                                <input type='submit' value='退会'>
                            </form>    
                        
                        </div>
                    </div>
                </div>
            </div>

            <hr>

        </div>
    </div>
</div>

    <!-- bootstrapのポップアップ画面 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection