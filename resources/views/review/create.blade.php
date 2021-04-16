@extends('layouts.app')

@section('content')

<form>
    <div class="row">
        <div class="col-6 ml-5 my-2">
            <div class="input-group">
                <label for="file">峠検索 : <br/></label>
	            <input type="text" class="form-control" placeholder="テキスト入力欄">
	            <span class="input-group-btn">
		        <button type="button" class="btn btn-default">検索</button>
	            </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 ml-5 my-2">        
            <div class="form-group">
                <label for="file1">画像選択</label>
                <input type="file" id="file1" class="form-control-file">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8 ml-5">
            <label for="exampleInputEmail1">コメント</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="コメントする"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-2 ml-5">
            <label for="exampleInputEmail1">登った日</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>
    
        <div class="col-2">
            <label for="exampleInputEmail1">走行距離</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>

        <div class="col-2">
            <label for="exampleInputEmail1">走行時間</label>
            <input type="comment" class="form-control" id="exampleInputcomment" placeholder="コメント入力">
        </div>
    </div>

    <div class="row">
        <div class="col-12 ml-5">
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

            <div class="col-12 ml-5">
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

            <div class="col-12 ml-5">
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

            <div class="col-12 ml-5">
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
            
            <button type="submit" class="col-8 m-5 btn btn-primary">投稿</button>
        </div>
    </div>
</form>

@endsection