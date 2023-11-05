<?php
if(isset($_POST["submit"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operator"];

    switch($op){
        case "+":
            echo "The Result is: ". ($num1 + $num2);
            break;
        case "-":
            echo "The result is ". ($num1 - $num2);
            break;
        case "*":
            echo "The result is ". ($num1 * $num2);
            break;
        case "/":
            if ($num2 == 0){
                echo "cannot divide by zero!!";
            }
            else{
                echo "The result is ". ($num1 / $num2);
            }
            break;
        default:
            echo "Invalid Operator selected";

    }
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <label >First Number: </label>
        <input type="text" name="num1" >
        &nbsp;
        <label>Select Operator: </label>
        <select name="operator">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="/">Division (/)</option>
            <option value="*">Multiplication (*)</option>
        </select>
        &nbsp;
        <label>Second NUmber:</label>
        <input type="text" name="num2" >
        &nbsp;
        <button type="submit" name="submit">Calculate!</button>
    </form>
</body>
</html>
<?php 
}
?>