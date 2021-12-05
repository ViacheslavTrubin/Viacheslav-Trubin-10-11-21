<?php

if (date('H') > 20 && date('H') < 6){
    $bg = 'white';
    $color = '#fff';
} else {
    $bg = 'rebeccapurple';
    $color = '#000';
}

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Сайтец</title>
    <style type="text/css">
        body{
            background: <?php echo $bg; ?>;
            color: <?php echo $color ?>;
        }
    </style>
    <link rel="stylesheet" href="../styles/style1.css" >

</head>


<body vlink="black">
<header class = "header-site">
    <div class="new_header">
        <h1 class="top" align="left"><img src="../image/2.png" height="50px" alt=""></h1>
        <nav class="main-menu">
            <ul>
                <li class="Tm" ><a href="../inc/avtor.php" >Войти</a></li>
                <li class="Tm" ><a href="../html/massiv.php" >Массивы</a></li>
                <li class="Tm" ><a href="../html/into.php" >Таблица Менделеева</a></li>
                <li class="Tm" ><a href="../html/site.php" >Главная</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>