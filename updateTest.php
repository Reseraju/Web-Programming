<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn){
    $myText = $_POST["testfield"];
    $myId = $_POST["selectedId"];
    $sql = "UPDATE testtable SET testField = '$myText' WHERE id $myId";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Table</title>
</head>
<body>
    <form action="updateTest.php" method="post">
        Enter the id to update: <br> <br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
        if($conn){
         echo "connected";
        }
        else{
            die("connection failed: ". mysqli_connect_error());
        }
        mysqli_close($conn);
        ?>
        <br>
        Enter a text to update: <br>
        <input type="text" name="testfield">
        <input type="submit" name="update" value="Update Record">
    </form>
</body>
</html>