@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center mt-3">
    <div class="w-50">
        <h1>マイページ</h1>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fas fa-user fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">会員情報の編集</label>
                            <p>アカウント情報の編集</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ url('/users/edit') }}">
                        編集
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fas fa-archive fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">過去投稿一覧</label>
                            <p>過去投稿一覧を確認できます</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ url('/create') }}">
                        一覧へ
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fas fa-sign-out-alt fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">ログアウト</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ url('/') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>

                    <form id="logout-form" action="{{ url('/show') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fas fa-sign-out-alt fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">退会</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
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