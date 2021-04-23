@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <span>
                <a href="{{ url('/mypage') }}">マイページ</a> > 過去記事一覧
            </span>

            <h1 class="mt-3 mb-3">過去記事一覧</h1>

            <hr>

            <div class="row mt-5"> 
                <div class="col-8 card-deck mx-auto" style="width:auto">
                    <div class="col card" style="width:15rem;">
                        <h4 class="card-title text-center mt-3">ユーザー名: ** </h4>
                        <h4 class="card-title text-center">峠名: ** </h4>
                        <img class="card-img-top d-block edit-img mx-auto" src="/img/free-icon.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">総合距離: **&nbsp;&nbsp;&nbsp;&nbsp;総合時間: **</h4>
                            <h5 class="text-center p-3">
                                総合評価
                                <br/>★★★★★
                                <br/>難易度
                                <br/>★★★★★
                                <br/>路面状況
                                <br/>★★★★★
                                <br/>景色のよさ
                                <br/>★★★★★
                            </h5>
                            <h5 class="card-subtitle text-muted">コメント</h5>
                            <p class="card-text">...</p>
                        </div>

                        <div class="col-12 text-center mb-3">
                            <a type="button" class="btn btn-secondary" href="{{ url('/users/create') }}">編集</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection