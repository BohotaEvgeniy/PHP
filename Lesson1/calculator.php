<!DOCTYPE html>
<html>
<head>
	<title>IMT-academy/homeWork</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="text-align: center; margin: 5px 0 20px; padding: 0;"><h1 style="margin: 0;"><i>Home Work</i></h1></div>


<!--		Задача 1
Написать калькуляторы перевода:
1.	Дюймы в сантиметры
2.	Дюймы в метры
3.	Мили в км
4.	Мили в метры
5.	Градусы цельсия в Фаренгейты
6.	Фаренгейты в градусы
7.	Морские мили в км
8.	Километры в сантиметры
9.	Футы в метры
10.	Галлон (англ) в литры
Каждая отдельная задача пишется после комментария её названия. В начале идут переменные которые задают начальные значения чисел.
-->
<div class="jumbotron" style="text-align: center; margin-bottom: 5px"><h3><i>Task one</i></h3></div>
<!-- form -->
<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
	<select name="operation">
		<option value="Дюймы в сантиметры">Дюймы в сантиметры</option>
		<option value="Дюймы в метры">Дюймы в метры</option>
		<option value="Мили в км">Мили в км</option>
		<option value="Мили в метры">Мили в метры</option>
		<option value="Градусы цельсия в Фаренгейтy">Градусы цельсия в Фаренгейтыy</option>
		<option value="Фаренгейты в градусы">Фаренгейты в градусы</option>
		<option value="Морские мили в км">Морские мили в км</option>
		<option value="Километры в сантиметры">Километры в сантиметры</option>
		<option value="Футы в метры">Футы в метры</option>
		<option value="Галлон (англ) в литры">Галлон (англ) в литры</option>
	</select>
	<input name="in-number" type="text" class="form-control" placeholder="number" style="width: 150px; display: inline; margin: 0 10px;" />
	<?php

	if($_POST['submit'])
	{
	if(is_numeric($_POST['in-number']))
	{	
	if($_POST['operation'] == 'Дюймы в сантиметры')
	{
	$result = $_POST['in-number'] / 2.54;	
	}
	if($_POST['operation'] == 'Дюймы в метры')
	{
		$result = $_POST['in-number'] * 0.0254;	
	}
	if($_POST['operation'] == 'Мили в км')
	{
		$result = round($_POST['in-number'] * 1.6093439999999999, 2);	
	}
	if($_POST['operation'] == 'Мили в метры')
	{
		$result = round($_POST['in-number'] * 1609.3439999999998, 2);		
	}
	if($_POST['operation'] == 'Градусы цельсия в Фаренгейтыy')
	{
		$result = round($_POST['in-number'] * 1.8000  +32, 2);	
	}
	if($_POST['operation'] == 'Фаренгейты в градусы')
	{
		$result = round(($_POST['in-number'] -32) / 1.8000, 2);	
	}
	if($_POST['operation'] == 'Морские мили в км')
	{
		$result = round($_POST['in-number'] / 0.53961, 4);	
	}
	if($_POST['operation'] == 'Километры в сантиметры')
	{
		$result = $_POST['in-number'] * 100000;	
	}
	if($_POST['operation'] == 'Футы в метры')
	{
		$result = round($_POST['in-number'] * 0,3048, 2);	;	
	}
	if($_POST['operation'] == 'Галлон (англ) в литры')
	{
		$result = round($_POST['in-number'] * 4.54609, 2);	;	
	}
	echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$result}</div>";

	} else {

	echo 'none number';

	}
	}

	?>
<input name="submit" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!--the end Task one-->

<!--
Задача 2
Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.
Исходные данные: Пройденный путь - S; Время движения - t.
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task two</i></h3></div>
<!-- form -->
<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
	<select name="operation">
		<option value="км/ч">Километры в час</option>
		<option value="м/c">Метры в секунду</option>
	</select>
	<input name="v" type="text" class="form-control" placeholder="км/ч" style="width: 100px; display: inline; margin: 0 5px;" />
	<input name="t" type="text" class="form-control" placeholder="время" style="width: 100px; display: inline; margin: 0 5px;" />
	<input name="m" type="text" class="form-control" placeholder="м/c" style="width: 100px; display: inline; margin: 0 5px;" />

	<?php

	if($_POST['submit2'])
	{
	if(is_numeric($_POST['v']))
	{	
	if(is_numeric($_POST['t']))
	if($_POST['operation'] == 'км/ч')
	{
	$s = 	$_POST['v'] / $_POST['t'] * 60;
	}
	echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$s}</div>";

	}
	if(is_numeric($_POST['m']))
	{	
		if($_POST['operation'] == 'м/c')
		{
		$m = round($_POST['m'] * 1000 / 3600, 2);
		echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$m}</div>";
	}		
	}
	}					


	?>
<input name="submit2" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!--the end Task two-->

<!--Задача 3
Даны переменные $a=10 и $b=3. Найдите остаток от деления $a на $b
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task three</i></h3></div>
<!-- form -->
<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">

	<input name="a" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
	<input name="b" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />

	<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	$truth = $_POST['submit3'];
	if($truth)
	{
	$result = $a % $b;
	echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$result}</div>";
	}

	?>
<input name="submit3" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!--the end Task three-->

<!--Задача 4
Возведите 2 в 10 степень. Результат вывести на экран
Найдите квадратный корень из 245
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task four</i></h3></div>
<!-- form -->
<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
	<select name="operation">
		<option value="Возведение в степень">Возведение в степень</option>
		<option value="Квадратный корень">Квадратный корень из</option>
	</select>
	<!--Для степени используем обе ячейки.В первую число,во вторую в какую степень-->
	<input name="up-number" type="text" class="form-control" placeholder="Возведение в степень" style="width: 170px; display: inline; margin: 0 10px;" />
	<input name="up-number2" type="text" class="form-control" placeholder="Квадратный корень" style="width: 170px; display: inline; margin: 0 10px;" />
	<?php

	if($_POST['submit4'])
	{
	if(is_numeric($_POST['up-number2']))
	{	
	if($_POST['operation'] == 'Квадратный корень')
	{
	$r = sqrt($_POST['up-number2']);	
	}
	}
	if(is_numeric($_POST['up-number']) && is_numeric($_POST['up-number']) )
	{	
		if($_POST['operation'] == 'Возведение в степень')
		{
		$r = pow($_POST['up-number'], $_POST['up-number2'] );	
	} 

	}
	echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$r}</div>";
	} 

	?>

<input name="submit4" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!--the end Task four -->

<!--
Задача 5
Вывести текующую дату средствами php (использовать функцию)
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task five</i></h3>

	<?php

	$today = date('l jS \of F Y h:i:s A');
	echo "<h2 style='color: #337ab7'>{$today}</h2>";


	?>

</div>
<!--the end Task five -->

<!--Задача 6
Найти сумму процентов от 5–ти заданных чисел
Исходные числа 100,200,300,400,500
Проценты от чисел по порядку – 10,20,30,40,50
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task six</i></h3></div>
<!-- form -->
<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
	<select name="operation">
		<option value="up_10">10%</option>
		<option value="up_20">20%</option>
		<option value="up_30">30%</option>
		<option value="up_40">40%</option>
		<option value="up_50">50%</option>
	</select>
	<input name="value" type="text" class="form-control" placeholder="number" style="width: 170px; display: inline; margin: 0 10px;" />
	<?php

	if($_POST['submit5'])
	{
	if(is_numeric($_POST['value']))
	{	
	if($_POST['operation'] == 'up_10'){
	$sum = $_POST['value'] * 0.10;	
	}
	if($_POST['operation'] == 'up_20'){
	$sum = $_POST['value'] * 0.20;	
	}
	if($_POST['operation'] == 'up_30'){
	$sum = $_POST['value'] * 0.30;	
	}
	if($_POST['operation'] == 'up_40'){
	$sum = $_POST['value'] * 0.40;	
	}
	if($_POST['operation'] == 'up_50'){
	$sum = $_POST['value'] * 0.50;	
	}
	echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$sum}</div>";

	} else {
	echo "none number";
	}
	}

	?>

<input name="submit5" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!--the end Task six -->

<!--Задача 7
Написать формулу перевода числа в коэфициент
Например в переменную ввели 20. На экране должно быть 1,2.
И наоборот, из коэфициента в число. 
Пример в переменную ввели 1,3. Должно выйти 30
-->
<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task seven</i></h3></div>

<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
	<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="calculator.php">
		<select name="operation">
			<option value="up">В целое число</option>
			<option value="dn">В дробное число</option>
		</select>
		<input name="instead" type="text" class="form-control" placeholder="number" style="width: 170px; display: inline; margin: 0 10px;" />
		<?php
		if($_POST['submit6'])
		{
		if(is_numeric($_POST['instead']))
		{	
		if($_POST['operation'] == 'up'){
		$sum = ($_POST['instead']-1) * 100;	
		}
		if($_POST['operation'] == 'dn'){
		$sum = $_POST['instead'] / 100 +1;	
		}
		echo "<div class='form-control' style='width: 150px; display: inline; border: 4px simple black;'>{$sum}</div>";

		} else {
		echo "none number";
		}
		}
		?>
<input name="submit6" type="submit" value="Calculate" class="btn btn-primary pull-right" />
</form>
<!-- В процессе решения =)-->
<!--the end Task seven -->

</div>

</body>
</html>