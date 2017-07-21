<?php
/*Задача 3
Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы
*/
header('Content-Type: text/html; charset=utf-8');
$arr = array();
$result = "";
$count = 0;
for ($i = 0;$i < 1000;$i++){
    $arr[] = rand(0,10); // любое значение от min to max
}

$contain = array_count_values($arr); // количество повторяющихся элементов
echo "<table style='border: solid;border-color: gray'>";
echo "<thead>";
echo "<tr>";
echo "<td style='text-align: center;border: solid;border-color'>" . 'Повторяется элемент массива' . "</td>";
echo "<td style='text-align: center;border: solid;border-color'>" . 'Количество повторений' . "</td>";
echo "</tr>";
echo "</thead>";

foreach ($contain as $key => $v){
    if($v > 1){
        echo "<tr>";
        echo "<td style='text-align: center;border: solid;border-color: gray'>" . $key . "</td>";
        echo "<td style='text-align: center;border: solid;border-color: gray'>" . $v . "</td>";
        echo "</tr>";
    } else {
        $count++;
        if($count == count($arr)) {
            echo "Повторяющиеся элементы массива,отсутствуют!";
        }
    }
}
echo "</table>";
?>