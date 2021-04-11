@extends('layouts.app')

@section('content')

    <div id="welcomepage">
        <div class="row">
            <div class="col-12">
                <div class="cath-text">
                    <img src="img/4452717_m.jpg" />
                    <p>とっておきの峠を見つけよう</p>
                </div>
            </div>
        </div>

        <div class="postlist">
            <div class="row">
                <div class="col-12 center-align  mt-2">
                    <div class="text-outline hide-on-med-and-up">
                        <p>ヒルクラは、
                        <br>自転車好き・ヒルクライム好きが
                        <br>それぞれの体験をもとに、
                        <br>情報をシェアしあうサービスです。</p>
                        
                        <p>口コミ投稿を見ているだけで、
                        <br>「週末どこに走りに行く？」を解決します。</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p>★★★★★記事を並べる★★★★★</p>
                <p>★★★★★記事を並べる★★★★★</p>
                <p>★★★★★記事を並べる★★★★★</p>
                <p>★★★★★記事を並べる★★★★★</p>
                <p>★★★★★記事を並べる★★★★★</p>
            </div>

            <div class="text-center mb-3">
                <a type="button" class="btn btn btn-info my-2" href="{{ url('/show') }}">投稿をもっと見る</a>
            </div>
        </div>
    
        <div class="feature mt-5 mb-5">
            <div class="row">
                <div class="col-sm-8">
                        <div class="text-content text-center">
                            <h2 class="float-contents-title">地域から検索！</h2>
                            <div><p>『ヒルクラ』は、全国の峠情報が掲載されています。
                            <br>ルートは？標高は？走りに行く前に峠情報をチェックをチェックしよう！</p>
                            </div>
                        </div>
                </div>
                <div  class="col-sm-4">
                    <div class="image-content text-center">
                        <img class="" alt="" src="/img/目的地アイコン1.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="image-content text-center">
                        <img class="" alt="" src="/img/目的地アイコン2.png">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="text-content text-center">
                        <h2 class="float-contents-title">登った峠を記録しよう</h2>
                        <div>
                            <p>登った峠の難易度や絶景度などの評価もできます。
                            <br>「どんな峠に登ってきたのか」「どう感じたのか」は、
                            <br>あなたの自転車人生を振り返るポイントになるはず。
                            <br>ルートの評価は他の人が登る際の参考にもなります。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="text-content text-center">
                        <h2 class="float-contents-title">思い出をシェアしよう</h2>
                        <div>
                            <p>峠は最高のリフレッシュ、時にはアクシデントなど、様々な顔を持っています。
                            <br>『ヒルクラ』では、自転車乗りの目線で口コミを書くことができます。
                            <br>写真だけでなく、「感動した」「辛かった」「いつ登った」など、
                            <br>私たちだけが味わえる『体験』を残していこう。</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="image-content text-center">
                            <img class="" alt="" src="/img/コミュニケーションアイコン.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cv-area text-center">
            <div class="row">
                <div class="col-12">
                    <p class="cv-text text-outline">\登録してシェアしよう/</p>
                    <button type="button" class="btn btn-info my-2">会員登録する</button>
                </div>
            </div>
        </div>
    </div>

@endsection