<?php ;
function writeMsg(){
    echo "Hello world<br>";
}
writeMsg();

function family($fname, $year){
    echo "".$fname." Born in ".$year."<br>";
}
family("smith", "1987");
family("stalin","1999");


function addNum(int $a, int $b): int{     // not neccessary to give the return type ":int"
    return $a + $b;
}
echo "1 + 4 = ".addNum(1, 4). "<br>";

function add(float $a, float $b): float{     // not neccessary to give the return type ":int"
    return $a + $b;
}
echo "1.2 + 4.2 = ".addNum(1.2, 4.2) . "<br>";
?>