@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">

            <h1 class="mt-3 mb-3">レビュー投稿</h1>

            <hr>

            <form method="POST" action="/posts">
            {{ csrf_field() }}
                <div class="row justify-content-center my-5">
                    <div class="col-8">
                        <label for="file">ユーザー名</label>
                        <p class="text-center">{{ Auth::user()->name }}</p>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center my-5">
                    <div class="col-8">
                        <label for="file">峠検索</label>

                        <div class="form-group">
                            <label for="prefecture_code" class="col-8">都道府県選択</label>
                            <div class="col-12">
                                <select class="form-control-sm" type="text" id="prefecture_code">
                                    <option>地域選択</option>
                                    <option>北海道</option>
                                    <option>青森県</option>
                                    <option>岩手県</option>
                                    <option>宮城県</option>
                                    <option>秋田県</option>
                                    <option>山形県</option>
                                    <option>福島県</option>
                                    <option>茨城県</option>
                                    <option>群馬県</option>
                                    <option>埼玉県</option>
                                    <option>千葉県</option>
                                    <option>東京都</option>
                                    <option>神奈川県</option>
                                    <option>新潟県</option>
                                    <option>富山県</option>
                                    <option>石川県</option>
                                    <option>福井県</option>
                                    <option>山梨県</option>
                                    <option>長野県</option>
                                    <option>岐阜県</option>
                                    <option>静岡県</option>
                                    <option>愛知県</option>
                                    <option>三重県</option>
                                    <option>滋賀県</option>
                                    <option>京都府</option>
                                    <option>大阪府</option>
                                    <option>兵庫県</option>
                                    <option>奈良県</option>
                                    <option>和歌山県</option>
                                    <option>鳥取県</option>
                                    <option>島根県</option>
                                    <option>岡山県</option>
                                    <option>広島県</option>
                                    <option>山口県</option>
                                    <option>徳島県</option>
                                    <option>香川県</option>
                                    <option>愛知県</option>
                                    <option>高知県</option>
                                    <option>福岡県</option>
                                    <option>佐賀県</option>
                                    <option>長崎県</option>
                                    <option>熊本県</option>
                                    <option>大分県</option>
                                    <option>宮崎県</option>
                                    <option>鹿児島県</option>
                                    <option>沖縄県</option>
                                                    
                                </select>

                                <button type="button" id="get_prefecture">峠検索</button>

                            </div>

                            <label for="prefecture_code" class="col-12">峠名(都道府県から選択してください)</label>
                            <select class="form-control-sm col-12 locations_name" name="location_name">
                                <option class="">峠選択</option>
                            </select>
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
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point1" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point2" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="evaluation_point" id="evaluation_point3" value="3">
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
                            <input class="form-check-input" type="radio" name="difficulty_point" id="difficulty_point3" value="3">
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
                            <input class="form-check-input" type="radio" name="scenery_point" id="scenery_point3" value="3">
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
                            <input class="form-check-input" type="radio" name="road_surface_point" id="road_surface_point3" value="3">
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

<hr class="m-5">

<script>
    /* Ajax通信開始 */
    $('#get_prefecture').on('click', function(){
        $.ajaxSetup({ 
            headers: { 
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            } //Headersを書き忘れるとエラーになる
        }); 

        let prefecture_code = $('#prefecture_code').val();//都道府県サーチ
        console.log(prefecture_code);
        if (!prefecture_code) {
            alert("文字を未入力");
            return false;
        } //ガード節で検索ワードが空の時、ここで処理を終了

        $.ajax({
            type: 'POST',
            url: "/searching",//後述するweb.phpのURLと同じ形にする
             data: {
                'text': prefecture_code //ここはサーバーに贈りたい情報。今回は検索ファームのバリューを送りたい。
             },
            dataType: 'json',
            timeout: 3000
        })

        /* 成功時 */
        .done(function(data){
            //alert("通信に成功しました");
            $('.locations_name option').remove();//リセット

            for( var i=0; i<data.length; i++) {
            //console.log( data[i] );
            $('.locations_name').append("<option>" + data[i] + "</option>");
            }
        })

        /* 失敗時 */
        .fail(function(data){
            alert("通信に失敗しました");
        });

    });
</script>

@endsection