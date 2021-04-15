@extends('layouts.app')

@section('content')

        <div class="row bg-primary">
            <div class="col-12 my-3">
                <div class="d-flex align-items-center">

                    <div class="ml-3">
                        <a class="btn btn-info text-white" href="{{ url('/create') }}">レビュー投稿へ</a>
                    </div>

                    <select class="form-control-sm ml-3">
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
                    </select>
                </div>
            </div>
        </div>

            <div class="row mx-auto">
                <div class="col p-0 post-box rounded">
                    <a style="text-decoration:none;" href="{{ url('/edit') }}">
                        <p class="text-center m-2 pt-2 h4">
                            ユーザー名
                        </p>
                        <p class="text-left text-white p-2 bg-info h4">
                            峠名: ** 
                        </p>
                        <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                        <div class="mx-auto">
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-center p-3">
                                        総合評価
                                        <br/>★★★★★
                                        <br/>難易度
                                        <br/>★★★★★
                                        <br/>路面状況
                                        <br/>★★★★★
                                        <br/>景色
                                        <br/>★★★★★
                                    </p>
                                </div>
                                <div class="col-8">
                                <p class="text-left p-3 m-0 h5"><ins>コメント</ins></p>
                                    <p class="text-left h5">
                                        *****
                                        <br/>*****
                                        <br/>*****
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>                    
                </div>

                <div class="col p-0 post-box rounded">
                    <a style="text-decoration:none;" href="{{ url('/edit') }}">
                        <p class="text-center m-2 pt-2 h4">
                            ユーザー名
                        </p>
                        <p class="text-left text-white p-2 bg-info h4">
                            峠名: ** 
                        </p>
                        <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                        <div class="mx-auto">
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-center p-3">
                                        総合評価
                                        <br/>★★★★★
                                        <br/>難易度
                                        <br/>★★★★★
                                        <br/>路面状況
                                        <br/>★★★★★
                                        <br/>景色
                                        <br/>★★★★★
                                    </p>
                                </div>
                                <div class="col-8">
                                <p class="text-left p-3 m-0 h5"><ins>コメント</ins></p>
                                    <p class="text-left h5">
                                        *****
                                        <br/>*****
                                        <br/>*****
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>                    
                </div>

                <div class="col p-0 post-box rounded">
                    <a style="text-decoration:none;" href="{{ url('/edit') }}">
                        <p class="text-center m-2 pt-2 h4">
                            ユーザー名
                        </p>
                        <p class="text-left text-white p-2 bg-info h4">
                            峠名: ** 
                        </p>
                        <img class="d-block mx-auto" width="300"　alt="" src="/img/フリーアイコン.png">
                        <div class="mx-auto">
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-center p-3">
                                        総合評価
                                        <br/>★★★★★
                                        <br/>難易度
                                        <br/>★★★★★
                                        <br/>路面状況
                                        <br/>★★★★★
                                        <br/>景色
                                        <br/>★★★★★
                                    </p>
                                </div>
                                <div class="col-8">
                                <p class="text-left p-3 m-0 h5"><ins>コメント</ins></p>
                                    <p class="text-left h5">
                                        *****
                                        <br/>*****
                                        <br/>*****
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>                    
                </div>

@endsection