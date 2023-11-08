<?php
function add_five(&$value){
    $value += 98;
}
$num = 2;
add_five($num);
echo "Num= $num";
?>