<?php
function getFullName ($family_name,$first_name){
    $result = $family_name . " " . $first_name;
    return $result;
}

$fullName = getFullName("宇賀神","直也");
echo $fullName;
$fullName2 = getFullName("西銘","承太郎");
echo $fullName2;
?>