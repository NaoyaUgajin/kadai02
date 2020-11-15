#課題1
<?php
$name="宇賀神直也";
if($name){
 echo "私は宇賀神直也です";   
} else {
 echo "宇賀神直也ではありません";
}

?>

#課題2
<?php
$total = 0;
for ($i = 1; $i <= 10000; $i++){
 $total += $i;
}

echo $total;

?>

#課題3
<?php
$fruits = array("orange", "banana", "melon", "grape", "lychee");
foreach($fruits as $fruits){
 echo "要素は" . $fruits;
 echo "\n";
}

?>

#課題4
<?php
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0)
    echo $i;
    echo "\n";
}

?>