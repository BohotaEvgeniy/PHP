<?php
/*
Задача 13
Нарисовать ромб из чисел, используя php. Принцип почти такой же, как в задаче 12
*/
header('Content-Type: text/html; charset=utf-8');

$count = 10;
$count2 = 3;
$x = 0;
$x2 = 0;

echo "<pre>";
for ($i = 1;$i < 10;$i++){
    echo str_repeat(' ',$count--);
    echo str_repeat('1',$i+$x)." \n";
    $x++;
}
for ($i = 8;$i > 0;$i--){
    echo str_repeat(' ',$count2++);
    echo str_repeat('1',$i*2-1)." \n";
}
echo "</pre>";

?>