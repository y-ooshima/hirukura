@extends('layouts.app')

@section('content')

    <div class="row bg-primary">
        <div class="col-12 my-3">
            <div class="d-flex align-items-center">
                <div class="ml-3">
                    <a class="btn btn-info text-white" href="{{ url('/create') }}">レビュー投稿一覧へ</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-7 p-0 edit-post-box mx-auto">

            <p class="text-center m-0 pt-2 h4">
                ユーザー名
            </p>
            <p class="text-center text-white bg-info p-2 m-0 h4">
                峠名: **&nbsp;&nbsp;&nbsp;&nbsp;地域: **
            </p>
            <p class="text-center m-2 pt-2 h4">
                総合距離: **&nbsp;&nbsp;&nbsp;&nbsp;総合時間: ** 
            </p>
            <img class="d-block edit-img mx-auto" alt="" src="/img/フリーアイコン.png">

            <div class="row">
                <div class="col mx-auto">
                    <p class="text-center p-3">
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

                <div class="col text-left p-3">
                    <p class="">
                        <ins>コメント</ins>
                    </p>
                    <p  class="">
                        *****
                        <br/>*****
                        <br/>*****
                        <br/>*****
                    </p>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-8 mx-auto">
            <form>
                <div class="form-group">
                    <label>コメント</label>
                    <textarea class="form-control" rows="3" with=80% placeholder="コメントする"></textarea>
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-info text-white m-3">コメントを送信</button>
                </div>
            </form>
        </div>
    </div>

@endsection