@extends('layouts.app')

@section('content')

        <div class="row bg-primary">
            <div class="col-12 my-3">
                <div class="d-flex align-items-center">

                    <div class="ml-3">
                        <a class="btn btn-info text-white" href="{{ url('/create') }}">レビュー投稿へ</a>
                    </div>

                    <select class="form-control-sm ml-3">
                        <option>地域検索</option>
                        <option>北海道</option>
                        <option>東京</option>
                        <option>富山</option>
                        <option>大阪</option>
                        <option>沖縄</option>
                    </select>

                    <select class="form-control-sm ml-3">
                        <option>並び替え</option>
                        <option>総合評価</option>
                        <option>難易度</option>
                        <option>路面状況</option>
                        <option>景色のよさ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mt-5"> 
            <div class="card-deck mx-auto" style="width:auto">
                <div class="col card" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名: ** </h5>
                    <img class="card-img-top" src="/img/フリーアイコン.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名: ** </h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">...</p>
                        <a href="{{ url('/edit') }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="col card" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名: ** </h5>
                    <img class="card-img-top" src="/img/フリーアイコン.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名: ** </h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">...</p>
                        <a href="{{ url('/edit') }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="col card" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名: ** </h5>
                    <img class="card-img-top" src="/img/フリーアイコン.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名: ** </h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">...</p>
                        <a href="{{ url('/edit') }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="col card" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名: ** </h5>
                    <img class="card-img-top" src="/img/フリーアイコン.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名: ** </h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">...</p>
                        <a href="{{ url('/edit') }}" class="card-link">詳細表示</a>
                    </div>
                </div>
            </div>
        </div>

    <hr class="m-5">

@endsection