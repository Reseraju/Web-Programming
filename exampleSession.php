<?php
session_start();
if(isset($_POST['login'])){
    if(($_POST['uname'] != "")|| ($_POST['pwd'] != "")){
        $username = $_POST["uname"];
        $mypass = $_POST["pwd"];
        if($username == "admin" && $mypass == "admin123"){
            $_SESSION["uname"] = $username;
            header("Location: welcome.php");
            exit();
        }
        else{
            $errorMessage = "Incorrect username or password";
        }
    }else{
        $errorMessage = "Enter username and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php
    if(isset($errorMessage)){
        echo "<p style='color:red;'>$errorMessage</p>";
    }
    ?>
    <form action="exampleSession.php"  method="post" >
        <p>Enter your username and password in the form and hit login button</p>
        UserName : <input type="text" name="uname"  /><br><br>
        Password: <input type="password" name="pwd" /><br><br>
        <input type="submit" name="login" value="Login" />
    </form>
</body>
</html>