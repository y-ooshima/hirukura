@extends('layouts.app')

@section('content')

        <div clazss="row">
            <nav class="navbar bg-primary">
                <div class="d-flex align-items-center">

                    <div class="navbar-nav">
                        <ul class="nav mx-5">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/create') }}">レビュー投稿へ</a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-right mx-5">
                        <select class="form-control-sm">
                            <option>地域検索</option>
                            <option>北海道</option>
                            <option>東京</option>
                            <option>富山</option>
                            <option>大阪</option>
                            <option>沖縄</option>
                        </select>
                    </div>

                    <div class="navbar-right">
                        <select class="form-control-sm">
                            <option>並び替え</option>
                            <option>総合評価</option>
                            <option>難易度</option>
                            <option>路面状況</option>
                            <option>景色のよさ</option>
                        </select>
                    </div>
                    
                </div>
            </nav>
        </div>

        <div class="post-wapper">
            <div class="row">
                <div class="col-xl-4 p-0">
                    <div class="post-box rounded">
                        <a class="" href="{{ url('/edit') }}">
                            <p class="text-center m-2 pt-2">
                                ユーザー名
                            </p>
                            <p class="text-left m-2">
                                峠名: ** 
                            </p>
                            <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                            <div class="mx-auto">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-left p-3">
                                            総合評価 : 
                                            <br/>★★★★★
                                            <br/>難易度 :
                                            <br/>★★★★★
                                            <br/>路面状況 :
                                            <br/>★★★★★
                                            <br/>景色 :
                                            <br/>★★★★★
                                        </p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-left p-3">
                                            コメント 
                                            <br/>****＊
                                            <br/>****＊
                                            <br/>****＊
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 p-0">
                    <div class="post-box rounded">
                        <a class="" href="{{ url('/edit') }}">
                            <p class="text-center m-2 pt-2">
                                ユーザー名
                            </p>
                            <p class="text-left m-2">
                                峠名: ** 
                            </p>
                            <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                            <div class="mx-auto">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-left p-3">
                                            総合評価 : 
                                            <br/>★★★★★
                                            <br/>難易度 :
                                            <br/>★★★★★
                                            <br/>路面状況 :
                                            <br/>★★★★★
                                            <br/>景色 :
                                            <br/>★★★★★
                                        </p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-left p-3">
                                            コメント 
                                            <br/>****＊
                                            <br/>****＊
                                            <br/>****＊
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-4 p-0">
                    <div class="post-box rounded">
                        <a class="" href="{{ url('/edit') }}">
                            <p class="text-center m-2 pt-2">
                                ユーザー名
                            </p>
                            <p class="text-left m-2">
                                峠名: ** 
                            </p>
                            <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                            <div class="mx-auto">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="text-left p-3">
                                            総合評価 : 
                                            <br/>★★★★★
                                            <br/>難易度 :
                                            <br/>★★★★★
                                            <br/>路面状況 :
                                            <br/>★★★★★
                                            <br/>景色 :
                                            <br/>★★★★★
                                        </p>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-left p-3">
                                            コメント 
                                            <br/>****＊
                                            <br/>****＊
                                            <br/>****＊
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

@endsection