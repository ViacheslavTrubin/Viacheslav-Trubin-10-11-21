<?php
echo '<h2>Первая задача</h2>';
function day($num){
    $day = array('Пнд', 'Втр', 'Срд', 'Чет', 'Пят', 'Суб', 'Вск');
    echo $day[$num-1];
}
$num = 7;
echo day($num)."<br>";
echo "<br>";

echo '<h2>Вторая задача</h2>';
function pol($n){
for ($i = 1; $i <= $n; $i++)
    $rand_arr[] = mt_rand(-100, 100);
echo '<pre>';
print_r($rand_arr);
echo '</pre>';
foreach ($rand_arr as $num)
    if  ($num > 0){

        echo "$num<br>";
    }
    }
    $n = 4;
pol($n);
echo '<br>';

echo '<h2>Третья задача</h2>';
function buk($str){
    $str = preg_replace("/[ ]/", "", $str);
    $str2 = preg_replace("/[АЕИОУЭЫЮЯаеиоуэыюя]/", "", $str);

        $neglas = strlen($str) - strlen($str2);
    $glas = strlen($str) - $neglas;
    $z[0] =$glas;
    $z[1] =$neglas;
    echo ("Количество гласных ". "$glas");
    echo '<br>';
    echo ("Количество согласных ". "$neglas");
    echo '<br>';
    print_r($z);
    return $z;
}

$str = "Привет тебе дорогой друг";
echo '<br>';
echo $str;
echo '<br>';
buk($str);
echo '<br>';

echo '<h2>Четвертая задача</h2>';
function strok($str3){
    $str3 = preg_replace('/[^A-ZА-ЯЁа-яёa-z0-9]+/i', '', $str3);
    echo $str3;

    echo '<br>';
}
$str3 = 'Привет тебе Мой Friend';
echo '<br>';
echo $str3;
echo '<br>';
strok($str3);
echo '<br>';




echo '<h2>Пятая задача</h2>';
function glav($str1){
    $str3 = str_replace(' ', '', $str1);
    //echo $str3;
    $str3 = preg_replace("/[A-ZА-ЯЁ]/", "", $str3);
  //  $str3 = preg_replace("/[ ]/", "", $str3);
    $zaglav = strlen($str1) - strlen($str3);

    echo ("Количество заглавных ". "$zaglav");
    echo '<br>';


}

$str1 = 'Привет тебе Мой дорогой друг';
echo '<br>';
echo $str1;
echo '<br>';
glav($str1);
echo '<br>';


$str5 = preg_replace('/[А-ЯЁ]/', '', $str1);
$count_up = 0;
for($i=0; $i<strlen($str5); $i++) {
    if (strtoupper($str5[$i]) == $str5[$i]) {
        $count_up++ ;
    }}
    echo 'Строчных букв равно ' . $count_up;

?>