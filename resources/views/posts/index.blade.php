@extends('layouts.app')

@section('content')

    <div id="welcomepage">
        <div class="row">
            <div class="col-12 p-0">
                <div class="cath-text">
                    <img class="d-block mx-auto" width="100%" src="img/background_img.jpg" />
                    <p>情報をシェアして
                    <br/>とっておきの峠を見つけよう</p>
                </div>
            </div>
        </div>

        <div class="row postlist">
            <div class="col-12 center-align mt-2">
                <div class="text-outline hide-on-med-and-up">
                    <p>自転車好き・ヒルクライム好きが
                    <br>それぞれの体験をもとに、
                    <br>情報をシェアしあうサービスです。</p>
                    <p>口コミ投稿を見ているだけで、
                    <br>「週末どこに走りに行く？」
                    <br>を解決します。</p>
                </div>
            </div>
        </div>
    
        <div class="row postlist"> 
            <div class="card-deck mt-3 mx-auto" style="width:auto">
                <div class="card" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名:{{ $user->name }}</h5>
                    <img class="card-img-top" src="/img/free_icon.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名:{{ $mountain->name }}</h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">{{ $post->comment }}</p>
                        <a href="{{ route('posts.show',[$post->id]) }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="card d-none d-sm-block" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名:{{ $user->name }}</h5>
                    <img class="card-img-top" src="/img/free_icon.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名:{{ $mountain->name }}</h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">{{ $post->comment }}</p>
                        <a href="{{ route('posts.show',[$post->id]) }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="card d-none d-md-block" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名:{{ $user->name }}</h5>
                    <img class="card-img-top" src="/img/free_icon.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名:{{ $mountain->name }}</h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">{{ $post->comment }}</p>
                        <a href="{{ route('posts.show',[$post->id]) }}" class="card-link">詳細表示</a>
                    </div>
                </div>
                <div class="card d-none d-lg-block" style="width:15rem;">
                <h5 class="card-title mt-3">ユーザー名:{{ $user->name }}</h5>
                    <img class="card-img-top" src="/img/free_icon.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">峠名:{{ $mountain->name }}</h5>
                        <h6 class="card-subtitle text-muted">コメント</h6>
                        <p class="card-text">{{ $post->comment }}</p>
                        <a href="{{ route('posts.show',[$post->id]) }}" class="card-link">詳細表示</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row postlist">
            <div class="col-12 text-center my-3">
                <a type="button" class="btn btn-secondary" href="{{ url('/show') }}">投稿をもっと見る</a>
            </div>
        </div>
    
        <div class="feature mt-5 mb-5">
            <div class="bg-white">
                <div class="row">
                    <div class="col">
                        <div class="text-content text-center">
                            <h2 class="float-contents-title">峠から検索！</h2>
                            <div>
                                <p>全国の峠情報が掲載されています。
                                <br>ルートは？標高は？走りに行く前に峠情報を
                                <br>チェックをチェックしよう！</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-md-inline">
                        <div class="image-content text-center">
                            <img class="" alt="" src="/img/map_icon1.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-light my-2">
                <div class="row">
                    <div class="col d-none d-md-inline">
                        <div class="image-content text-center">
                            <img class="" alt="" src="/img/map_icon2.png">
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-content text-center">
                            <h2 class="float-contents-title">登った峠を記録しよう</h2>
                            <div>
                                <p>登った峠の難易度や絶景度などの
                                <br>評価もできます。
                                <br>「どんな峠に登ったか」「どう感じたのか」は、
                                <br>自転車人生を振り返るポイントになるはず。
                                <br>他の人が登る際の参考にもなります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white">
                <div class="row">
                    <div class="col">
                        <div class="text-content text-center">
                            <h2 class="float-contents-title">思い出をシェアしよう</h2>
                            <div>
                                <p>自転車乗りの目線で口コミを書くことができます。
                                <br>写真だけでなく、「感動した」「辛かった」
                                <br>「いつ登った」など、私たちだけが味わえる
                                <br>『体験』を残していこう。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-md-inline">
                        <div class="image-content text-center">
                            <img class="" alt="" src="/img/memories_icon.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row cv-area text-center">
            <div class="col-12 mb-5">
                <p class="cv-text text-outline">\登録してシェアしよう/</p>
                <a type="button" class="btn btn-secondary" href="{{ route('register') }}">会員登録する</a>
            </div>
        </div>
    </div>

@endsection