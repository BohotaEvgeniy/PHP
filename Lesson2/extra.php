<?php
/*Дополнительные задачи (не обязательно)
2. Реализовать функцию перевода 10-го числа в двоичное
*/

	$x = "222222222262222222226";
	$arr = str_split($x);
	$value = 10;
for($i = 0, $size = count($arr); $i < $size; ++$i) {
	if($i == $value) {
		$value += 10; 
		echo decbin($arr[$i]);
	} else {
		echo $arr[$i];
	}
}
?>
