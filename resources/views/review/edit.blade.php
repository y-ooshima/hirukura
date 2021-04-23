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

    <div class="row mt-5"> 
        <div class="col-7 card-deck mx-auto" style="width:auto">
            <div class="col card" style="width:15rem;">
            <h4 class="card-title text-center mt-3">ユーザー名: ** </h4>
            <h4 class="card-title text-center">峠名: ** </h4>
                <img class="card-img-top d-block edit-img mx-auto" src="/img/free_icon.png" alt="Card image cap">
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