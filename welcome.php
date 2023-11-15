<?php
session_start();
if(isset($_SESSION['uname'])){
    $welcomeMessage = "Welcome, " .$_SESSION["uname"]. "!";
    echo "<h1>$welcomeMessage</h1>";
}
else{
    echo "<h1>session dosen't set<h1>";
    exit();
}
?>


