<?php
// 1　数値を２倍にして返す関数
// 数値を２倍にして返す関数
function sum($a) {
    $result = $a * 2;
    echo $result;
    echo "\n";
}

// 関数を実行
echo sum(4);

// 2　$a と $b を足した結果を返す関数
//$a と $b　を足した結果を返す関数
function f($a,$b){
    $result = $a + $b;
    echo $result;
    echo "\n";
}

//関数を実行
echo f(1, 2);

// 3　すべての要素をかけた結果を返す関数

function multiply($arr){
    $result = 1;
        foreach($arr as $a){
            $result *= $a;
        }
        echo $result;
}
multiply(array(1,3,5,7,9));
echo "\n";

// 4　配列の中で一番大きい値を返す関数
function max_array($arr){
 $max_number = $arr[0];
 foreach((array)$arr as $a){
 if($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 
 echo max_array(9,4,7,2,6);
 echo "\n";
 
 // 5　ビルトイン関数
 // ・ strip_tags（指定した文字列からHTMLタグを取り除く関数）
 
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

// ・　array_push（一つ以上の要素を配列の最後に追加する）

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

// ・ array_merge（（一つまたは複数の配列をマージする

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

// ・ time（現在のUnix　タイムスタンプを返す
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

// ・ mktime（日付をUnixのタイムスタンプとして取得する
// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

// ・ date（トーカルの日付/時刻を書式化する
// 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
date_default_timezone_set('UTC');


// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));