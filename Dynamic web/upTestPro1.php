<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn){
    $stdName = $_POST["name"];
    $stdBranch = $_POST["branch"];
    $stdBatch = $_POST["batch"];
    $stdAge = $_POST["age"];
    $stdId = $_POST["selectedId"];
    $sql = "UPDATE student SET stdname = '$stdName' , branch = '$stdBranch' , batch = '$stdBatch' , age = '$stdAge' WHERE stdid='$stdId'";
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