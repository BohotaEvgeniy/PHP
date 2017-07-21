<?php
/*
Задача 6
Сгенерировать массив из 10-ти случайных чисел. После этого,
сгенерировать одно случайно число и проверить, входи ли оно в данный массив.
*/
header('Content-Type: text/html; charset=utf-8');

$arr = array();
$single_number =  rand(0,10); // любое значение от min to max

for ($i = 0;$i < 10;$i++){
    $arr[] = rand(0,10);
    if($i == 9){
        if(in_array($single_number,$arr)){
            echo "Совпадает число " . " " . $single_number;
        } else {
            echo "Нет совпадений";
        }
    }
}
echo "</br>";
?>