<?php
if(isset($_POST["submit"])){
    $num = $_POST["number"];
    if($num%2==0){
        echo "The number is even.";
    }
    else{
        echo "The number is odd";
    }
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even checker</title>
</head>
<body>
    <form action="oddOrEven.php" method="post">
        Enter Number: <input type="text" name="number" >
        <br>
        <button type="submit" name="submit">Check</button>
    </form>
</body>
</html>
<?php
}
?>