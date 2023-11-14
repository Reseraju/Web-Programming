<?php
if(isset($_GET['operator'])){
    $fnum = $_GET['fnum'];
    $snum = $_GET['snum'];
    $operator = $_GET['operator'];
    $result = '';
}
else{
    $fnum = "";
    $snum = "";
    $operator = "";
    $result = "";
}
if(is_numeric($fnum) && is_numeric($snum)){
    switch($operator){
        case "Add":
            $result = $fnum + $snum;
            break;
        case "Subtract":
            $result = $fnum - $snum;
            break;
        case "Multiply":
            $result = $fnum * $snum;
            break;
        case "Divide":
            $result = $fnum / $snum;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator</title>
</head>
<body>
    <form action="simpleCalculator.php" method="get" >
        <input type="number" name="fnum" >First Number <br>
        <input type="number" name="snum" >Second Number <br>
        <input type="number" name="result" value=<?php echo $result; ?>>Result <br>
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Subtract">
        <input type="submit" name="operator" value="Multiply">
        <input type="submit" name="operator" value="Divide">
    </form>
</body>
</html>