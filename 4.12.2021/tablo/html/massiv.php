<?php


if (date('H') > 20 && date('H') < 6) {
    $bg = 'white';
    $color = '#fff';
} else {
    $bg = 'rebeccapurple';
    $color = '#000';
}
require_once '../inc/header.php';

echo '<h2>Первая задача</h2>';
$rand_arr = [];
$arr1 = $rand_arr;
$n = 4;
for ($i = 1; $i <= $n; $i++)
    $rand_arr[] = mt_rand(0, 100);
        echo '<pre>';
     //   print_r('$rand_arr');
        echo '</pre>';

foreach ($rand_arr as $num)
    if  ($i = $i++/2==0){
        echo "<strong> $num<br></strong>";
    }
    else{
        echo "$num<br>";
    }
echo '<br>';

    echo '<h2>Вторая задача</h2>';
    $object = array(
    "Воздух" => array("Астранафт", "Авианосец", "Шар", "Туча", "Солнце"),
    "Земля"  => array("Кот", "Машина", "Вертолет", "анапа", "Атлас", "Стул"),
    "Вода"  => array("Эсминец", "Шлюпка", "Аллигатор")
);
echo '<pre>';
 print_r($object);
echo '</pre>';
echo "Предметы с буквы А<br>";

foreach ($object as $skey => $stihia) {
    foreach ($stihia as $pred) {
        if (mb_substr($pred, 0, 1) === "А")
            echo $pred . "<br>";

    }
}
echo '<br>';





echo '<h2>Третья задача</h2>';
$array_odnom = array(0 => array(0 => "1", 1 => "2", 2 => "3"),
    1 => array(0 => "4", 1 => "5", 2 => "6"),
    2 => array(0 => "7", 1 => "8", 2 => "9"));
echo '<pre>';
    print_r($array_odnom);
echo '</pre>';
echo 'Количество в порядке<br>';
var_dump(count($array_odnom));
echo '<br>';
echo 'Количество всех элементов<br>';
var_dump(count($array_odnom, COUNT_RECURSIVE) - (count($array_odnom)));
echo '<br>';
echo '<br>';
echo '<h2>Строки вторая задача</h2>';

$str1 = "Трубин Вячеслав Сергеевич";
$arr1 = explode(' ', $str1);
$arr2[0] = $arr1[1];
$arr2[1] = $arr1[0];
$new_arr = array_reverse($arr2);
$new_arr = implode(" ", $new_arr);
print_r($new_arr);

echo '<br>';
echo '<br>';
echo '<h2>Строки третья задача</h2>';

$str2 = "Привет мир";
echo substr_count($str2, 'и');

echo '<br>';
echo '<br>';
echo '<h2>Строки четвертая задача</h2>';

$str3 = "html css php";
$arr3 = explode(' ', $str3);
print_r($arr3);

echo '<br>';
echo '<br>';
echo '<h2>Строки пятая задача</h2>';


$date1 = date_create("25-02-2016");
$date2 = date_create("30-11-2021");
$result = date_diff($date1,$date2);
echo "Количество дней : ". $result->days;
echo '<br>';
echo '<br>';
//



function slovo($text3)
{
    //$text3 = "В 555 году Италия была отвоёвана Византией. Вся территория Италии была разделена на герцогства во главе с герцогами, являвшимися формально подчинёнными экзарха Равенны. В 572 году часть герцогств Италии была завоёвана лангобардами. За Византией остались Римское герцогство, Герцогства Неаполь, Амалфитанского герцогства, Герцогства Калабрии, Герцогства Пентаполь, Равеннского экзархата и Венецианской республики, а также фема Сицилия (завоёвана арабами в 956 году) и сардинские юдикаты.";
    $text4 = preg_replace("/[ ]/", "", $text3);
    $prob = strlen($text3) - strlen($text4);
    $slovo = $prob + 1;
    echo ("Количество слов ". "$slovo");
    return $slovo;
}
$text3 = "В 555 году Италия была отвоёвана Византией. Вся территория Италии была разделена на герцогства во главе с герцогами, являвшимися формально подчинёнными экзарха Равенны. В 572 году часть герцогств Италии была завоёвана лангобардами. За Византией остались Римское герцогство, Герцогства Неаполь, Амалфитанского герцогства, Герцогства Калабрии, Герцогства Пентаполь, Равеннского экзархата и Венецианской республики, а также фема Сицилия (завоёвана арабами в 956 году) и сардинские юдикаты.";
slovo($text3);

echo '<br>';
echo '<br>';

function massiv($rand_arr) {

    $sum = array_sum($rand_arr)/count($rand_arr);

    echo ("Среднеарифметическое значение массива ". "$sum");
}


$rand_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
massiv($rand_arr);


//




function fibona($n,$first = 0,$second = 1)
{
    $fib = [$first,$second];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
$n = 6;
echo "<pre>";
print_r(fibona($n));
echo '</pre>';
?>
<?php
require_once '../inc/footer.php'
?>
