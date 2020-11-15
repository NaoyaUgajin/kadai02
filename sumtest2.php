<?php
function shoppingTotal($arr){
 $result = 0;
 for ($i = 0;$i < count($arr); $i++){
 $result +=$arr[$i];
 }
 return $result;
}

echo shoppingTotal(array(500,1500,3200) );
?>