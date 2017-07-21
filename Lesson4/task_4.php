<?php
/*
Задача 4
Создать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти)
*/
header('Content-Type: text/html; charset=utf-8');

$result = 0;
for ($i = 0;$i < 100;$i++){
    $arr[$i] = rand(); // любое значение от min to max
    if($arr[$i] % 5){
        $result += $arr[$i];
    }
}
echo "Сумма чисел,которые кратны 5-ти = " . $result . "</br>";
?>