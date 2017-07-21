<?php
/*
Задача 5
Дана строка. Если ее длина больше 10 символов,
то оставить в строке только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.
*/
header('Content-Type: text/html; charset=utf-8');

$number_random = rand(1,11);
$string = "";
for ($i = 1;$i <= $number_random;$i++){
    $string = $string . rand(0,9);
    if($i == $number_random){
        if(strlen($string) > 10){
            $string = substr($string,0, 6 );
        } else {
            while(strlen($string) != 12){
                $string = $string . 'o';
            }
        }
    }
}
echo  $string . "</br>";
?>