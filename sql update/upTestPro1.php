<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn){
    $myText = $_POST["testfield"];
    $myId = $_POST["selectedId"];
    $sql = "UPDATE testTable SET testField = '$myText' WHERE id='$myId'";
    if(mysqli_query($conn, $sql)){
        echo "Record Updated successfully";
    }
    else{
        echo "Error updating record: ". mysqli_error($conn);
    }
}
else{
    die("connection failed: ". mysqli_connect_error());
}
mysqli_close($conn);
?>