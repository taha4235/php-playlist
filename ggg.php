<?php
//ERROR CONTROL OPERATORS
/*

*/
$file = @fopen("css.php","r")or die('this file is not found');
echo $file;
/*(@include("increase.php"))or die("this file is not here");*/
$server = "localhost";
$user = "helo taha"
$pass="hello php";
$db = "our databases";
@mysqli_connect($server,$user,$pass,$db) or die("there is somethings wrong")

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
    
</body>
</html>