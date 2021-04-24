@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

        <h1>マイページ</h1>

        <hr>

        

            <div class="form-group">
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

                <div class="container mb-3">
                    <div class="row">
                        <div class="col-12 text-center">
                        <a type="button" class="btn btn-secondary" href="{{ url('/users/profile') }}">プロフィール編集へ</a>
                        </div>
                    </div>
                </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <a type="button" class="btn btn-secondary" href="{{ url('/users/edit') }}">過去投稿一覧へ</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="container mb-3">

            <div class="row">
                    <div class="col text-center">
                        <a href="{{ url('/re-enter') }}">
                        パスワード変更
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col text-center">
                    <a href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        退会
                    </a>

                    <form id="logout-form" action="{{ url('/show') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <hr>
    
    </div>
</div>

@endsection