<?php

if (date('H') > 20 && date('H') < 6){
    $bg = 'white';
    $color = '#fff';
} else {
    $bg = 'rebeccapurple';
    $color = '#000';
}
require_once '../inc/header.php';
?>


<main >
    <section class="tablo">
        <div class="photo"><img src="../image/1.jpg" alt="ошибка" width="100%" ></div>
        <div class="name" align="center" >
            <p class="name1">Вячеслав Трубин</p>
        </div>
        <div class="about">Катаюсь на сноуборде и горном Велосипеде
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео </div>
        <div class="otziv">Понравился ситль подачи информации, и все же порой тяжело ловить с первого раза что доносит преподаватель</div>

    </section>
</main>
<hr color="red">
<body>
<section class="cont1">
    <div class="one1"><img src="../image/k1.jpg" alt="">
        <div class="2one" align="center"> Котик удивлен</div></div>
    <div class="one1"><img src="../image/k2.jpg" alt="">
        <div class="2one" align="center"> Котик отдыхает</div></div>
    <div class="one1"><img src="../image/k3.jpg" alt="">
        <div class="2one" align="center"> Котик кушает</div></div>
    <div class="one1"><img src="../image/k4.png" alt="">
        <div class="2one" align="center"> Котик милаш</div></div>
    <div class="one1"><img src="../image/k5.png" alt="">
        <div class="2one" align="center"> Котик рад</div></div>
</section>
</body>

<hr color="green">
<body>
<section class="grid_cont">
    <div class="A" align="center"><img src="../image/kk1.jpg" alt="">
        <div class="a" > Котик с сердечком</div>
    </div>
    <div class="B" align="center"><img src="../image/kk2.jpg" alt="">
        <div class="b" > Котик щурится</div>
    </div>
    <div class="C" align="center"><img src="../image/kk3.png" alt="">
        <div class="c" > Котик с письмом</div>
    </div>
    <div class="D" align="center"><img src="../image/kk4.jpg" alt="">
        <div class="d"> Котик гордый</div>
    </div>
</section>
</body>
<hr color="red">
<?php
require_once '../inc/footer.php'
?>


</html>
