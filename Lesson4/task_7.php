<?php
/*
Задача 7
Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:
Сортировку массива по значению
Сортировку массива по ключу.
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();

for ($i = 0;$i < 10;$i++){
    $arr[rand(0,10)] = rand(0,10); // любое значение от min to max
    if($i == 9){
        asort($arr);
        echo "<pre>";
        echo print_r($arr) . "</br>";
        echo "</pre>";
        ksort($arr);
        echo "<pre>";
        echo print_r($arr) . "</br>";
        echo "</pre>";
    }
}

?>