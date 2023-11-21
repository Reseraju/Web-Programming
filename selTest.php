<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn){
    // echo "connection established";
    $sql = "SELECT * from testTable";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        echo "<table> <tr> <th>id </th> <th>my message </th></tr> ";
        while($row =mysqli_fetch_assoc($res)){
            echo "<tr> <td>  " .$row["id"]. "</td><td>" .$row["testField"]. "</td></tr>";
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