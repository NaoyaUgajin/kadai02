<?php
function fizzbuzz($max){
  for ($i = 1; $i <= $max; $i++){
  if (($i % 15) == 0){
   echo "fizz_buzz";
  }
  elseif (($i % 5) == 0){
   echo "buzz";
  }
  elseif (($i % 3) == 0){
   echo "fizz";
  }
  else {
   echo $i;
  }
   echo "\n";
 }
}
 echo fizzbuzz(40)

?>