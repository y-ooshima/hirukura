@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">

        <h1>投稿記事一覧</h1>

        <hr>

            <!-- <select class="form-control-sm ml-3">
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
            </select> -->
        </div>
    </div>

    @foreach ($posts as $post)
        <div class="row mt-5"> 
            <div class="col-12 card-deck mx-auto" style="width:auto">
                <div class="col card" style="width:15rem;">
                    <h4 class="card-title text-center">峠名: {{ $post->id }} </h4>
                    <img class="card-img-top d-block edit-img mx-auto" src="/img/free_icon.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="card-title text-center">登った日:</br> {{ $post->climbing_day }}</h5>
                            </div>
                            <div class="col-12">
                                <h5 class="card-title text-center">走行距離:</br> {{ $post->mileage }}km</h5>
                            </div>
                            <div class="col-12">
                                <h5 class="card-title text-center">走行時間:</br> {{ $post->running_time }}h</h5>
                            </div>
                        </div>
                            <h5 class="text-center p-3">
                            総合評価
                            <br/>{{ $post->evaluation_point }}
                            <br/>難易度
                            <br/>{{ $post->difficulty_point }}
                            <br/>景色のよさ
                            <br/>{{ $post->scenery_point }}
                            <br/>路面状況
                            <br/>{{ $post->road_surface_point }}
                        </h5>
                        <h5 class="card-subtitle text-muted">コメント</h5>
                        <p class="card-text">{{ $post->comment }}</p>
                    </div>

                    <div class="card-body">
                        <a href="{{ route('posts.show',[$post->id]) }}" class="card-link">詳細表示</a>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
</div>

<hr class="m-5">

@endsection