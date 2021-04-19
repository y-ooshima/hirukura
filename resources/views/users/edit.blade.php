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

                <div class="row">
                    <div class="col-10 p-0 edit-post-box mx-auto">
                        <p class="text-center m-0 pt-2 h3">
                            ユーザー名
                        </p>
                        <p class="text-center text-white bg-info p-2 m-0 h3">
                            峠名: **&nbsp;&nbsp;&nbsp;&nbsp;地域: **
                        </p>
                        <p class="text-center m-2 pt-2 h3">
                            総合距離: **&nbsp;&nbsp;&nbsp;&nbsp;総合時間: ** 
                        </p>
                        <img class="d-block edit-img mx-auto" alt="" src="/img/フリーアイコン.png">

                        <div class="row">
                            <div class="col-4 mx-auto">
                                <p class="text-center p-3 h4">
                                    総合評価
                                    <br/>★★★★★
                                    <br/>難易度
                                    <br/>★★★★★
                                    <br/>路面状況
                                    <br/>★★★★★
                                    <br/>景色のよさ
                                    <br/>★★★★★
                                </p>
                            </div>

                            <div class="col-8 text-left p-3">
                                <p class="h4">
                                    <ins>コメント</ins>
                                </p>
                                <p  class="h4">
                                    *****
                                    <br/>*****
                                    <br/>*****
                                    <br/>*****
                                </p>
                            </div>
                        </div>

                    <div class="col-12 text-center mb-3">
                        <a type="button" class="btn btn-secondary" href="{{ url('/users/create') }}">編集</a>
                    </div>

                </div>

        </div>
    </div>
</div>

@endsection