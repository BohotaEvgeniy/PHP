<?php
/*
Задача 10
Создать массив из 100 случайных ключей. Создать еще один массив, который будет содержать все ключи первого массива.
Использовать функции php, не писать «велосипед»
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();
$arr2 = array();

for ($i = 0;$i < 100;$i++){
    $arr[rand()] = null;
}
$arr2 = array_flip(array_keys($arr));
echo "<pre>";
print_r($arr);
print_r($arr2);
echo "</pre>";

?>