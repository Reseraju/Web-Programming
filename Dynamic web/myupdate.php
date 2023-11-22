<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="mystyle.css" rel="stylesheet"/>
    <title>Update Table</title>
</head>
<body>
    <?php
    include 'myheader.html';
    ?>
    <div class="content">
    <h2>Update student to www.smith.com</h2>
    <form action="upTestPro1.php" method="post">
        Enter the id to update: 
        <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
        if($conn){
            $sql = "SELECT * FROM student";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo "<select name = 'selectedId'>";
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['stdid'];
                    echo "<option value = '".$id."'>" .$id. "</option>";
                }
                echo "</select>";
            }
        }
        else{
            die("connection failed: ". mysqli_connect_error());
        }
        ?>
        <br>
        Enter a Student name to update: 
        <input type="text" name="name"><br>
        Enter a Student Branch to update: 
        <input type="text" name="branch"><br>
        Enter a Student Batch to update: 
        <input type="text" name="batch"><br>
        Enter a Student Age to update: 
        <input type="text" name="age"><br>
        <input type="submit" name="update" value="Update Record">
    </form>
    </div>
</body>
</html>