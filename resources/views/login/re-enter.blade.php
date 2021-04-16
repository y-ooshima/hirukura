@extends('layouts.app')

@section('content')

<div id="login">
        
        <h3 class="text-center text-info pt-5">パスワード再入力</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center mb-5">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="form-group">
                                <label for="password" class="text-info">パスワード:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">確認用パスワード:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <hr size="5">

                            <div class="form-group">
                                <input type="送信" name="submit" class="btn btn-info btn-block" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection