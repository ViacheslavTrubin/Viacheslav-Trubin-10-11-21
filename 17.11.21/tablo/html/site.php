<?php

require_once '../inc/header.php';

//4 задача
function data(&$day1)
{
    $to = date("d-m-Y");
    $from = date("13-01-1992");
    date_default_timezone_set('Asia/Yekaterinburg');

    $day1 = (strtotime($to) - strtotime($from)) / (60 * 60 * 24);
    echo ("Количество дней ".round($day1));
    return $day1;

}
$day1 = 4;


//2 задача
error_reporting(E_ALL & ~E_NOTICE);
function glass(&$glass)
{
    $text = "Катаюсь на сноуборде и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео";
    $text2 = preg_replace("/[АЕИОУЭЫЮЯаеиоуэыюя]/", "", $text);
    $glas = strlen($text) - strlen($text2);
    echo ("Количество гласных ". "$glas");
    return $glass;
}
$glass = 2;


//3 задача
error_reporting(E_ALL & ~E_NOTICE);
function slovo(&$slovo)
{
    $text3 = "Катаюсь на сноуборде и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем а так же съемкой видео";
    $text4 = preg_replace("/[ ]/", "", $text3);
    $prob = strlen($text3) - strlen($text4);
    $slovo = $prob + 1;
    echo ("Количество слов ". "$slovo");
    return $slovo;
}
$slovo = 3;

//1 задача
function para(&$fin)
{
    $str1 = "Понравился ситль подачи информации, и все же порой тяжело ловить с первого раза что доносит преподаватель";
    $str2 = explode(' ', $str1);
    for ($i = 1; $i <= 15; $i++)
        foreach ($str2 as $item => $element) {
            ($item % 2 === 0) ? $str2[$item] = "<span style = 'color:firebrick'>$element</span>" : $str2[$item] = "<span style = 'color:goldenrod'>$element</span>";
        }
    $fin = implode(' ', $str2);
    echo $fin;
    return $fin;
}
$fin = 1;

function about(&$about2)
{
    $about = "Катаюсь на сноуборде и горном Велосипеде.
            Играю в баскетбол,веду спортивный образ жизни, хорошо разбираюсь в компьютерах,
            практикуюсь в игре на барабанах, люблю копаться в автомобилях, занимаюсь монтажем 
            а так же съемкой видео";
    $aboutarr = explode(".", $about);
    $aboutarr[0] = "<span style = 'color:blue'>$aboutarr[0]</span>";
    $about2 = implode('. ', $aboutarr);
    echo $about2;
    return $about2;
}
$about2 = 1;

?>



<main >
    <section class="tablo">
        <div class="photo"><img src="../image/1.jpg" alt="ошибка" width="100%" ></div>
        <div class="name" align="center" >
            <p class="name1">Вячеслав Трубин</p>
            <p class="name2">
                <?php
                echo "Дата текущая " . date("d-m-Y");
                echo "</br>";
                echo "День Рождения " . date("13-01-1992");
                echo "</br>";
                data($day1);
                echo "</br>";
                glass($glass);
                echo "</br>";
                slovo($slovo);

                ?>

            </p>
        </div>
        <div class="about"><?php
            about($about2);
            ?>
        </div>
        <div class="otziv">
            <?php
            para($fin);
            ?>
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
