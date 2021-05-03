@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <span>
                <a href="{{ url('/mypage') }}">マイページ</a> > プロフィールの編集
            </span>

            <h1 class="mt-3 mb-3">プロフィール編集</h1>

            <hr>

            <form method="POST" action="/users/mypage">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="name" class="text-md-left">氏名</label>
                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>氏名を入力してください</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <label for="name" class="text-md-left">メールアドレス</label>
                        <div class="">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>メールアドレスを入力してください</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center">
                    <button type="submit" class="col-8 mt-3 mb-5 btn btn-primary">プロフィール更新</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection