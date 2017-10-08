<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo('test3');
var_dump($_SESSION);
setcookie("test3", rand());
echo("<pre>");
echo ("Cookie:test1");
var_dump($_COOKIE["test1"]);
echo("<pre>");
echo ("Cookie:test2");
var_dump($_COOKIE["test2"]);
echo("<pre>");
echo ("Cookie:test3");
var_dump($_COOKIE["test3"]);
?>
    <a href="test1.php">Top</a>
    <a href="test3.php">Next</a>
</body>
</html>

