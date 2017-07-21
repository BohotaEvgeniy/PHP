<?php
/*
Задача 2
Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.
Результат вывести в виде таблицы (офорить ее рамкой)
*/
$count = 1;
$arr = array();
$up = 25;

for ($i = 1; $i <= 1000; $i++){
    $arr[$i] = $i * $i;
}

echo "<table>";
for ($i = 0;$i <= 40;$i++){
    echo "<tr>";
    for ($j = $count;$j < $up;$j++){
        echo "<td style='border:1px solid;'>";
        echo $arr[$j];
        echo "</td>";
    }
    echo "</tr>";
    $count += 10;
    $up += 10;
}
echo "<table>";
?>