<?php
if (!empty($_GET)) {

    $longue = $_GET["longue"];
    $large = $_GET["large"];
    function rectangle($longue, $large)
    {
        return $longue * $large;
    }

    $aire = rectangle($longue, $large);

    echo "L'aire du rectangle est : " . $aire . " cm²";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""><br>
        <label for="">La longueur du rectangle</label>
        <input type="number" name="longue"><br><br>
        <label for="">La largeur du rectangle</label>
        <input type="number" name="large"><br>
        <input type="submit">


    </form>
</body>
</html>
