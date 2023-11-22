<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn){
    // echo "connection established";
    $sql = "SELECT * from student";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        echo "<table> <tr> <th>id </th> <th>Name </th></tr> ";
        while($row =mysqli_fetch_assoc($res)){
            echo "<tr> <td>  " .$row["stdid"]. "</td><td>" .$row["stdname"]. "</td><td>" .$row["branch"]. "</td><td>" .$row["batch"]. "</td><td>" .$row["age"]. "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 results";
    }
}
else{
    die("connection failed" .mysqli_connect_error());
}
?>