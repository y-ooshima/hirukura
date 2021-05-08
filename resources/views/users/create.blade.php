@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <span>
                <a href="{{ url('/mypage') }}">マイページ</a> > <a href="{{ url('/users/edit') }}">過去記事一覧</a>> 過去投稿編集
            </span>

            <h1 class="mt-3 mb-3">過去投稿編集</h1>

            <hr>

            <form method="POST" action="/posts">
            {{ csrf_field() }}
                <div class="row justify-content-center my-5">
                    <div class="col-8">
                        <div class="">
                            <label for="file">峠検索</label>
                            <select class="form-control-sm ml-3">
                                <option>地域検索</option>
                                @foreach($hillclimb_locations as $post)
                                    <option href="/administrator/{{ $post->id }}">{{ $post->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="user_id">
                            <input type="text" name="hillclimb_location_id">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="テキスト入力欄">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-primary">検索</button>
                            </span>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-8">        
                        <div class="form-group">
                            <label for="file1">画像選択</label>
                            <input type="text" name="image_path">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-4">
                        <label for="exampleInputEmail1">登った日</label>
                        <input type="comment" class="form-control" name="climbing_day" placeholder="日付入力">
                    </div>
                
                    <div class="col-4">
                        <label for="exampleInputEmail1">走行距離(km)</label>
                        <input type="comment" class="form-control" name="mileage" placeholder="走行距離入力">
                    </div>

                    <div class="col-4">
                        <label for="exampleInputEmail1">走行時間(h)</label>
                        <input type="comment" class="form-control" name="running_time" placeholder="走行時間入力">
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-12 text-center">
                        <label>総合評価</label><br/>
                        <input type="text" name="evaluation_point">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>難易度</label><br/>
                        <input type="text" name="difficulty_point">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>景色のよさ</label><br/>
                        <input type="text" name="scenery_point">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <label>路面状況</label><br/>
                        <input type="text" name="road_surface_point">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center mt-3">
                    <div class="col-12">
                        <label for="exampleInputEmail1">コメント</label>
                        <textarea class="form-control" name="comment" rows="5" placeholder="コメントする"></textarea>
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