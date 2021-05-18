<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MountainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //「simple_html_dom.php」ファイルを呼び出す
      require_once('simple_html_dom.php');
      //オブジェクト作成
      $dom = new simple_html_dom();
      //スクレイピング対象のURLを読み込む
      $dom->load_file('https://www.road-quest.bike/searches/touge_name');

      //要素を全て取得し、変数に格納
      $header_menu_all = $dom->find('div.prefecture-item,span.title');

      foreach ($header_menu_all as $result) {
        if(preg_match('/都|府|県|北海道/', $result)){
          $prefecture_search = mb_substr($result->plaintext, -2);
          if($prefecture_search == "県 "||$prefecture_search == "都 "||$prefecture_search == "府 "||$prefecture_search == "道 "){
            $prefecture_Input = preg_replace("/( |　)/", "", $result->plaintext);
            continue;
          }else{
            $mountain_Input = $result->plaintext;
          }
        }else{
          $mountain_Input = $result->plaintext;
          if(preg_match('/TOP/', $mountain_Input)){
            $prefecture_Input = '';
            $mountain_Input = '';
          }
        }
          
        if($prefecture_Input !== '' && $mountain_Input !== ''){
          DB::table('mountains')->insert([
            [
              'name' => $mountain_Input,
              'prefecture' => $prefecture_Input,
            ],
          ]);
        }
      }
    }
}
