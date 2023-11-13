<?php
function armstrong($num){
    $number = $num;
    $sum = 0;
    $power = strlen((string)$number);
    while($number != 0){
        $digit = $number % 10;
        $sum += pow($digit,$power);
        $number = (int)($number/10);
    }
    if($sum == $num){
        return 1;
    }
    else{
        return 0;
    }
}

if(isset($_POST['submit'])){
    $value = $_POST['num'];
    if(armstrong($value)){
        echo "The number " . $value . " is Armstrong :)";
    }
    else{
        echo "The number " . $value . " is not Armstrong :(";
    }
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong or not</title>
</head>
<body>
    <form action="armstrong.php" method="post" >
        Enter a number: <input type="text" name="num"><br><br>
        <button type="submit" name="submit" >Check</button>
    </form>
</body>
</html>

<?php
}
?>