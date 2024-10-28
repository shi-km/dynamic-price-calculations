<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="trial.php" method="post">
No. Of Books <br> <input type="text" name="text"><br><br>
<button type="submit" name="submit">Order Now</button>
    </form>
</body>
</html>
<?php
$copies= filter_input(INPUT_POST, "text", FILTER_SANITIZE_NUMBER_INT);

switch($copies){
    case $copies >= 20;
    echo $copies * 199;
    break;

    case $copies >=10 && $copies <=19;
    echo $copies * 229;
    break;

    case $copies >=5 && $copies <=9;
    echo $copies * 249;
    break;

    case $copies >=1 && $copies <=4;
    echo $copies * 299;
    break;
}
?>