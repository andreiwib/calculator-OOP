<?php
declare(strict_types = 1);
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="includes/calc.inc.php" method="post">
    <h1>My first calculator!</h1>
    <input type="number" name="num1" placeholder="First Number" class="casute">
    <select name="oper" class="semn">
        <option value="add">Adunare</option>
        <option value="sub">Scadere</option>
        <option value="div">Impartire</option>
        <option value="mul">Inmultire</option>
    </select>
    <input type="number" name="num2" placeholder="Second Number" class="casute">
    <button type="submit" name="submit" class="buton">Calculeaza</button>
</form>


</body>
</html>