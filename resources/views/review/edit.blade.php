@extends('layouts.app')

@section('content')

    <div clazss="row">
            <nav class="navbar bg-primary">
                <div class="d-flex align-items-center"> 
                    <div class="navbar-nav">
                        <ul class="nav mx-5">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/show') }}">レビュー投稿一覧へ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>

        <div class="post-wapper">
            <div class="row">
                <div class="col-sm-9 mx-auto">
                    <div class="post-box">
                        <div class="">
                        <p class="text-center m-2 pt-2">
                                ユーザー名
                            </p>
                            <p class="text-center m-2">
                                地域: ** 
                                <br/>峠名: ** 
                            </p>
                            <img class="d-block mx-auto" width="500" alt="" src="/img/フリーアイコン.png">
                            <div class="mx-auto">

                                <p class="text-center m-2 pt-2">
                                    総合距離: **   総合時間: ** 
                                </p>

                                <p class="text-center p-3">
                                    総合評価 : ★★★★★
                                    <br/>難易度 : ★★★★★
                                    <br/>路面状況 : ★★★★★
                                    <br/>景色のよさ : ★★★★★
                                </p>

                                <p class="text-center p-3">
                                    コメント 
                                    <br/>****＊
                                    <br/>****＊
                                    <br/>****＊
                                    <br/>****＊
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 mx-auto">
                    <form>
                        <!-- コメント入力 -->
                        <div class="form-group">
                            <label>コメント</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="コメントする"></textarea>
                        </div>
                        <!-- 送信ボタン -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-info m-2">コメントを送信</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

@endsection