<?php
$lows = array("mon" => 23, "Tue" => 18,"Wed" =>27);
foreach($lows as $day => $temp){
    echo "Key=" .$day . ", Value= ". $temp;
    echo "<br>";
}
?>