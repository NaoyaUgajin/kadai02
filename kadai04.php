#課題1
<?php
function kadai1($number){
 return $number*2;
}

echo kadai1(6);
?>

#課題2
<?php
function kadai2($a, $b){
 //処理したい内容
 return $a+$b;
 }
 
 echo kadai2(3,3);
 ?>
 
#課題3
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
 
#課題4
<?php
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
     echo '$a = '. $a;
     echo "\n";
     echo '$max_number = '. $max_number;
     echo "\n";
    if ($max_number < $a){
     $max_number = $a;
     echo '$max_number = '. $max_number;
     echo "\n";
    }
  }

  return $max_number;
 }

 echo max_array(array(1,3,2,5,4));
?>

#課題5
<?php
$str = "<h>strip_tagsのテスト</h>".
       "<p>タグのテスト</p>";
echo strip_tags($str) ."\n";
?>

<?php
$stack = array("tea","coffee");
 array_push($stack, "juice","soda");
print_r($stack);
?>

<?php
$array1 = [3,3,3];
$array2 = [6,6,6];
$array3 = [9,9,9];

$array = array_merge($array1, $array2, $array3);
print_r($array);
?>

<?php
$timestamp = time();
echo $timestamp;
?>

<?php
$timestamp = mktime(0,0,0,11,11,2018);
echo $timestamp;
?>

<?php
$timestamp = time();
echo date('y/m/d' , $timestamp);
?>