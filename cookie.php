<?php
if(isset($_POST['writeCookie'])){
    // define("FIVE_DAYS", 60 * 60 * 24 * 5);

    // setcookie("name" , $_POST['name'], time() + FIVE_DAYS);
    // setcookie("height" , $_POST['height'], time() + FIVE_DAYS);
    // setcookie("color" , $_POST['color'], time() + FIVE_DAYS);
    // $name = $_COOKIE['name'];
    // $height =$_COOKIE['height'];
    // $color =$_COOKIE['color'];
    // echo "cookies are successfully with the following data";
    // echo "<p>The name is $name</p><p>The height is $height</p><span>";

    session_start();
    $_SESSION["uname"] = "admin";
    $_SESSION["pwd"] = "admin123";
    echo "session variables are set";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cookie.php" method="post">
        Name:
        <input type="text" name="name" /><br>
        Height: 
        <input type="text" name="height" /><br>
        Favorite color :
        <input type="text" name="color"/><br>
        <input type="submit" name="writeCookie" value="write cookie">
    </form>
</body>
</html>