@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <span>
                <a href="{{ url('/mypage') }}">マイページ</a> > 会員情報の編集
            </span>

            <h1 class="mt-3 mb-3">会員情報の編集</h1>

            <hr>

            <form method="POST" action="/users/mypage">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="name" class="text-md-left samazon-edit-user-info-label">氏名</label>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="email" class="text-md-left samazon-edit-user-info-label">メールアドレス</label>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="phone" class="text-md-left samazon-edit-user-info-label">地域</label>
                    </div>
                </div>

                <hr>
            </form>
        </div>
    </div>
</div>

@endsection