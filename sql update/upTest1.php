<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Table</title>
</head>
<body>
    <form action="upTestPro1.php" method="post">
        Enter the id to update: <br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
        if($conn){
            $sql = "SELECT * FROM testTable";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo "<select name = 'selectedId'>";
                while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
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
        Enter a text to update: <br>
        <input type="text" name="testfield"><br>
        <input type="submit" name="update" value="Update Record">
    </form>
</body>
</html>