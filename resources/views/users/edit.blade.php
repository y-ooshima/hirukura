@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <span>
                <a href="{{ route('mypage') }}">マイページ</a> > <a href="{{ route('mypage.show') }}">過去記事一覧</a>> 過去投稿編集
            </span>

            <h1 class="mt-3 mb-3">過去投稿編集</h1>

            <hr>

            <form method="POST" action="/posts/{{ $post->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

                <div class="row justify-content-center mt-3">
                    <div class="col-8">        
                        <div class="form-group">
                            <label for="file1">画像選択</label>
                            <input type="text" name="image_path" value="{{ $post->image_path }}">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-4">
                        <label for="exampleInputEmail1">登った日</label>
                        <input type="comment" class="form-control" name="climbing_day" placeholder="日付入力" value="{{ $post->climbing_day }}">
                    </div>
                
                    <div class="col-4">
                        <label for="exampleInputEmail1">走行距離(km)</label>
                        <input type="comment" class="form-control" name="mileage" placeholder="走行距離入力" value="{{ $post->mileage }}">
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">走行時間(h)</label>
                        <input type="comment" class="form-control" name="running_time" placeholder="走行時間入力" value="{{ $post->running_time }}">
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-12 text-center">
                        <label>総合評価</label><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point3" value="3" checked>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point4" value="4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point5" value="5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>難易度</label><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point3" value="3" checked>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point4" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point5" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>景色のよさ</label><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point3" value="3" checked>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point4" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point5" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>路面状況</label><br/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point3" value="3" checked>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point4" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point5" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-12">
                        <label for="exampleInputEmail1">コメント</label>
                        <textarea class="form-control" name="comment" rows="5" placeholder="コメントする">{{ $post->comment }}</textarea>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center">
                    <button type="submit" class="col-8 mt-3 mb-5 btn btn-primary">投稿</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection