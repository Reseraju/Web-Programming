<?php 
$students = array(
    '01' => 'John',
    '02' => 'Smith',
    '03' => 'Jane',
);

echo "Original array<br>";
foreach($students as $rollNo => $name){
    echo "$rollNo - $name <br>";
}

echo "<br><br>Sorted array<br>";
asort($students);
foreach($students as $rollNo => $name){
    echo "$rollNo - $name <br>";
}

?>