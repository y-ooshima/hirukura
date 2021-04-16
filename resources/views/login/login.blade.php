@extends('layouts.app')

@section('content')

    <div id="login">
        
        <h3 class="text-center text-info pt-5">ログイン</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <label for="username" class="text-info">ユーザー名:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">パスワード:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>次回から自動的にログインする</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <hr size="5">
                                <input type="submit" name="送信" class="btn btn-info btn-block" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 my-2">
                    <div id="register-link" class="text-center">
                        <a href="#" class="text-info">パスワードをお忘れの場合</a>
                    </div>
                </div>
            </div>

            <hr size="5">

            <div class="row">
                <div class="col-12 my-3">
                    <div id="register-link" class="text-center">
                        <a href="#" class="text-info">新規登録はこちらから</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection