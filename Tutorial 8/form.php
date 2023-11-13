<?php
if(isset($_POST['submit'])){
    $num = $_POST['num'];
    if($num%2 == 0){
        echo "The number is Even!!";
    }
    else{
        echo "The number is Odd!!";
    }
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd or even</title>
</head>
<body>
    <form action="form.php" method="post">
        Enter a number: 
        <input type="number" name="num"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php
}
?>