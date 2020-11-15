<?php
// 1〜10 までを足した値を返す関数
function sum($max){

    // $result は結果を保存する変数
    $result = 0;

    // $i は 1　からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){

        // $result に　$i を順番に足していく
        $result += $i;
    }

               // $result を結果として返す
    return $result;
}

// 関数を実行する
echo sum(100);
?>

<?php
function kadai1($number){
 return $number*2;
}

echo kadai1(6);
?>

<?php
function kadai2($a, $b){
 //処理したい内容
 return $a+$b;
 }
 
 echo kadai2(3,3);
 ?>
 
 <?php
 function kadai3($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
        return $result;
 }
 
 echo kadai3(array(1,3,5,7,9));
 ?>
 
 <?php
  function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 $arr = array(5,4,3,2,1);
 echo max($arr);
 }

 return $max_number;
 }

echo max(array(5,4,3,2,1))
?>
