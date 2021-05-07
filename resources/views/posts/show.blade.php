
 @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">

            <h1 class="mt-3 mb-3">記事</h1>

            <hr>

            <div class="row mt-5"> 
                <div class="col-8 card-deck mx-auto" style="width:auto">
                    <div class="col card" style="width:15rem;">
                        <h4 class="card-title text-center mt-3">ユーザー名: {{ $post->user_id }} </h4>
                        <h4 class="card-title text-center">峠名: {{ $post->hillclimb_location_id }} </h4>
                        <img class="card-img-top d-block edit-img mx-auto" src="/img/free_icon.png" alt="Card image cap">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title text-center">走行距離:</br> {{ $post->mileage }}km</h5>
                                </div>
                                <div class="col-6">
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