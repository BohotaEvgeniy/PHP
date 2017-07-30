<?php
/*Задача 1
Создайте функцию drawTable() или Table().
Задайте для функции три аргумента: $col, $row, $color.
отрисуйте таблицу умножения 3 раза с разным цветом., вызывая свою функцию с про$
*/

function drawTable ($col, $row, $randColor) {
    $randColor = '#';
    $count = 0;

    while($count < 6) {
        if(rand(0,1) === true){
            $randColor .= chr(rand(65, 70));
        } else {
            $randColor .= rand(0,9);
        }
        $count++;
    }
    echo "<table style='background: $randColor;color:fff'>";

    for ($j = 1; $j < $row+1; $j++) {
        echo "<tr>";
        for ($q = 1; $q < $col+1; $q++) {
            echo "<td>";
            echo $j*$q;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>" . "</br>";
}

for($i = 0; $i < 3; $i++){
    drawTable(rand(1,10),rand(1,10),'Любой аргумент');
}
?>
