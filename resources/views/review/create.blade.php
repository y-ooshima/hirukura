@extends('layouts.app')

@section('content')

<form>
    <div class="form-group text-center mx-5">
        <label for="exampleFormControlSelect1">地域</label><br/>
        <select class="form-control-sm" id="exampleFormControlSelect1">
            <option>地域検索</option>
            <option>北海道</option>
            <option>東京</option>
            <option>富山</option>
            <option>大阪</option>
            <option>沖縄</option>
        </select>
    
    <div class="form-group text-center mx-5">
        <label>写真投稿</label>
        <img class="d-block mx-auto" width="500" alt="" src="/img/フリーアイコン.png">
    </div>

    <label for="exampleInputEmail1">コメント</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="コメントする"></textarea>

    <div class="row">
        <div class="col-4">
            <label for="exampleInputEmail1">登った日</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>
    
        <div class="col-4">
            <label for="exampleInputEmail1">走行距離</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>

        <div class="col-4">
            <label for="exampleInputEmail1">走行時間</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>
    </div>

    <div>
    <label>総合評価:</label><br/>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
    <label class="form-check-label" for="inlineRadio3">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
    <label class="form-check-label" for="inlineRadio4">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
    <label class="form-check-label" for="inlineRadio5">5</label>
    </div>
    </div>

    <div>
    <label>難易度:</label><br/>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
    <label class="form-check-label" for="inlineRadio3">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
    <label class="form-check-label" for="inlineRadio3">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
    <label class="form-check-label" for="inlineRadio3">5</label>
    </div>
    </div>

    <div>
    <label>路面状況:</label><br/>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
    <label class="form-check-label" for="inlineRadio3">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
    <label class="form-check-label" for="inlineRadio3">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
    <label class="form-check-label" for="inlineRadio3">5</label>
    </div>
    </div>

    <div>
    <label>景色のよさ:</label><br/>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
    <label class="form-check-label" for="inlineRadio3">3</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
    <label class="form-check-label" for="inlineRadio3">4</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
    <label class="form-check-label" for="inlineRadio3">5</label>
    </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection