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
    <footer role="contentinfo">
    <section class="foot">
        <div class="kont" align="left">Контакты</div>
        <div class="vk" ><a href="https://vk.com/viacheslavslay" ><img src="../image/vk.png" width="30px"  ></a>   </div>
        <div class="inst"><a href="http://instagram.com/viacheslavslay" ><img src="../image/inst.png" width="30px"  ></a>   </div>
        <div class="face"><a class="fa" href="https://www.facebook.com/viacheslav.trubin" ><img src="../image/face.png" width="30px" ></a>   </div>
    </section>
</footer>
