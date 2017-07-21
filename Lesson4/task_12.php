<?php
/*
Задача 12
Нарисовать треугольник и числ при помощи php.
Результат должен быть примерно такого вида
1
11
111
1111
11111
*/
header('Content-Type: text/html; charset=utf-8');

$count = 10;
$x = 0;

echo "<pre>";
for ($i = 1;$i < 10;$i++){
    echo str_repeat(' ',$count--);
    echo str_repeat('1',$i+$x)." \n";
    $x++;
}
echo "</pre>";

?>

