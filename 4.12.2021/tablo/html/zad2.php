<?php
echo '<h2>Вторая задача</h2>';
$rand_arr2 = [];
$n1 = 6;
for ($i = 0; $i < $n1; $i++)
$rand_arr2[] = mt_rand(0, 100);
echo '<pre>';
print_r($rand_arr2);
echo '</pre>';
$n2 = $n1/2;
foreach ($rand_arr2 as $num2)

if  ($i >= ($n1/2)){
echo "<strong> $num2<br></strong>";

}
else{
echo "<i>$num2<br></i>";


}
echo '<br>';
?>