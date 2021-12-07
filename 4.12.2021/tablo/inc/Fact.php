<?php
require_once '../inc/header.php';
session_start();
$_SESSION['login'] = $_POST['login'];

setcookie('site','Fact', time() + 3600 * 24 * 7);

print_r($_COOKIE);




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="avtor.php">Назад</a>
</body>
<? require_once '../inc/footer.php' ?>
</html>