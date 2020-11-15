<?php
function fizzbuzz($max){
  for ($i = 1; $i <= $max; $i++){
  if (($i % 3) == 0){
   echo "fizz";
  }  
  elseif (($i % 5) == 0){
   echo "buzz";
  }
  elseif (($i % 15) == 0){
   echo "fizz_buzz";
  }
  else {
   echo $i;
  }
 }
}
 echo fizzbuzz(15)

?>