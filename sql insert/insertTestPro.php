<?php 
$conn = mysqli_connect("localhost","root","","test");
if($conn){
    $id = $_POST['id'];
    $myText = $_POST['testfield'];
    $sql = "INSERT INTO testTable VALUES ('$id','$myText')";
    if(mysqli_query($conn, $sql)){
        echo "Data Inserted Successfully!";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
}
else{
    die("Connection Failed!");
}
?>