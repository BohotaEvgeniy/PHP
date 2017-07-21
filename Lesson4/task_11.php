<?php
/*
Задача 11
Создать массива з 10-ти чисел. Вычислить произведение значений массива. Не использовать для решения задачи циклы.
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();

for ($i = 0;$i < 10;$i++){
    $arr[] = rand(1,10);
}
echo array_product($arr) . "</br>";

?>