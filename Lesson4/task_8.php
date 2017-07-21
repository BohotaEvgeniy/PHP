<?php
/*
Задача 8
Создать два массива из 10-ти случайных чисел.
Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();
$arr2 = array();

for ($i = 0;$i < 10;$i++){
    $arr[] = rand(0,10); // любое значение от min to max
    $arr2[] = rand(0,10); // любое значение от min to max
    if($i == 9){
        $result = array_diff($arr, $arr2);
        $result2 = array_intersect($arr, $arr2);
    }
}
echo "Расcхождение массивов";
echo "<pre>";
print_r($result);
echo "</pre>";
echo "Схождение массивов";
echo "<pre>";
print_r($result2);
echo "</pre>";

?>