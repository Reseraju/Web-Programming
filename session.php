<?php
session_start();
$_SESSION["uname"] = "admin";
$_SESSION["pwd"] = "admin123";
echo "session variables are set" .$_SESSION["uname"];
?>
