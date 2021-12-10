<?php
echo '<h2>Первая задача</h2>';
$rand_arr = [];
$n = 4;
for ($i = 1; $i <= $n; $i++)
    $rand_arr[] = mt_rand(0, 10);
echo '<pre>';
print_r($rand_arr);
echo '</pre>';
foreach ($rand_arr as $num)
    if  ($i = $i/2==0){
        $num =$num*10;
        echo "$num<br>";
    }
    else{
        echo "$num<br>";
    }
echo '<br>';

echo '<h2>Вторая задача</h2>';
$rand_arr2 = [];
$n1 = 6;
for ($i = 0; $i < $n1; $i++){
    $rand_arr2[] = mt_rand(0, 100);}
echo '<pre>';
print_r($rand_arr2);
echo '</pre>';
$n2 = $n1/2;

for ($i = 0; $i < $n1; $i++){

    if  ($i >=$n2){

        echo "<strong> $rand_arr2[$i]<br></strong>";

    }
    else {

        echo "<i>$rand_arr2[$i]<br></i>";

    }
    }
echo '<br>';

echo '<h2>Третья задача</h2>';
$rand_arr3 = [];
$n3 = rand(2, 10);
for ($i = 0; $i < $n3; $i++)
    $rand_arr3[] = mt_rand(0, 10);
echo '<pre>';
print_r($rand_arr3);
echo '</pre>';
echo '<br>';
$colvo = count($rand_arr3);
echo "Количество элементов " . $colvo;
echo '<br>';

echo '<h2>Четвертая задача</h2>';
$rand_arr4 = [];
$n4 = rand(1, 12);
for ($i = 1; $i < $n4; $i++)
    $rand_arr4[] = mt_rand(0, 10);
echo '<pre>';
print_r($rand_arr4);
echo '</pre>';
foreach ($rand_arr4 as $index)
    if  ($rand_arr4[$index] > $rand_arr4[$index-1]){

        echo "$rand_arr4[$index]<br>";
    }

echo '<br>';

echo '<h2>Пятая задача</h2>';
$rand_arr5 = [];
$n5 = rand(3, 10);
for ($i = 0; $i < $n4; $i++)
    $rand_arr5[] = mt_rand(-10, 10);
echo '<pre>';
print_r($rand_arr5);
echo '</pre>';
foreach ($rand_arr5 as $num5)
    if ($num5 > 0) {
        $num5 = -$num5;
        echo '<br>';
        echo $num5;
    }
else {
    $num5 = -$num5;
    echo '<br>';
    echo $num5;
}
echo '<br>';
