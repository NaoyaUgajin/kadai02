<?php
$name="宇賀神直也";
if($name){
 echo "私は宇賀神直也です";   
} else {
 echo "宇賀神直也ではありません";
}
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++){
 echo $i;
}
echo $total;
$fruits = array("orange", "banana", "melon", "grape", "lychee");
foreach($fruits as $fruits){
 echo "要素は" . $fruits;
 echo "\n";
}
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0)
    echo $i;
}