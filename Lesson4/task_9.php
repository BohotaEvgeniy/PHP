<?php
/*
Задача 9
Создать массив из 50-ти случайных чисел. Генерируя случайно число, проверять есть ли такой ключ в данном массив.
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();
$arr2 = array();

for ($i = 0;$i < 50;$i++){
    $number_random = rand(0,10); // любое значение от min to max
    if(in_array($number_random, $arr)){
        $arr2[] = $number_random;
        $arr[] = $number_random;
    } else {
        $arr[] = $number_random;
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "Есть такое значение";
echo "<pre>";
print_r(array_unique($arr2));
echo "</pre>";

?>