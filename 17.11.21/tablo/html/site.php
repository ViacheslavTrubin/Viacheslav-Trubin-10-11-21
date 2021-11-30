<?php

require_once '../inc/header.php';

//4 задача
date_default_timezone_set('Asia/Yekaterinburg');
$to = date("d-m-Y");
$from = date("13-01-1992"); //не знал как привязать дату из html
$day1 = (strtotime($to) - strtotime($from)) / (60 * 60 * 24);
//2 задача
error_reporting(E_ALL & ~E_NOTICE);
$text = "Катаюсь на сноуборде и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео";
$text2 = preg_replace("/[АЕИОУЭЫЮЯаеиоуэыюя]/", "", $text);
$glas = strlen($text) - strlen($text2);
//3 задача
error_reporting(E_ALL & ~E_NOTICE);
$text3 = "Катаюсь на сноуборде и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео";
$text4 = preg_replace("/[ ]/", "", $text3);
$prob = strlen($text3) - strlen($text4);
$slovo = $prob + 1;
//1 задача
//$str1 = "Понравился ситль подачи информации, и все же порой тяжело ловить с первого раза что доносит преподаватель";
//$str2 = explode(' ',$str1);
//For ($i = 1; $i <= 15; $i++)
//foreach ($str2 as $num){
//    if  ($i++/2==0) {
//        echo '<p style="color: gray">' . $num . '</p>' ;
//            }
//    else
//        echo '<p style="color: cadetblue">' . $num . '</p>' ;

//echo '<p style="color: red">' . $str1['inf'] . '</p>' ;
// По задачам делал на кусочках так как не понял как извлечь из html текст



?>


<main >
    <section class="tablo">
        <div class="photo"><img src="../image/1.jpg" alt="ошибка" width="100%" ></div>
        <div class="name" align="center" >
            <p class="name1">Вячеслав Трубин</p>
            <p class="name2">
                <?php
                echo $from;
                echo "</br>";
                echo $to;
                echo "</br>";
                echo ("Количество дней ".round($day1));
                echo "</br>";
                echo ("Количество гласных ". "$glas");
                echo "</br>";
                echo ("Количество слов ". "$slovo");

                ?>

            </p>
        </div>
        <div class="about"><span class="colortext">Катаюсь на сноуборде</span> и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео

        </div>
        <div class="otziv"><span class="colortext2">Понравился ситль подачи информации, и все же порой тяжело ловить с первого раза что доносит преподаватель
        </span>
        </div>

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
</form>
<?php
require_once '../inc/footer.php'
?>


</html>
