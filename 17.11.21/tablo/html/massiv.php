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

?>




<?php
require_once '../inc/footer.php'
?>
