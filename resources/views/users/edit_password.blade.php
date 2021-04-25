@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <span>
                <a href="{{ url('/mypage') }}">マイページ</a> > パスワードの変更
            </span>

            <h1 class="mt-3 mb-3">パスワードの変更</h1>

            <hr>

            <form method="post" action="{{route('mypage.update_password')}}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="name" class="text-md-left">パスワード</label>
                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-3 col-form-label text-md-right">確認用</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center">
                    <button type="submit" class="col-8 mt-3 mb-5 btn btn-primary">パスワード更新</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection