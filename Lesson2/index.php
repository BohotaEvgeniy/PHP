<?php 
/*A task 1
$hour = (int)strftime('%H');
$welcome = '';// Инициализируем переменную для приветствия
• Используя управляющую конструкцию if – elseif - else присвойте переменной 
$welcome значение, изходя из следующих условий
если число в переменной $hour попадает в диапазон:
◦ от 0 до 6 - Доброй ночи
◦ от 6 (включительно) до 12 - Доброе утро
◦ от 12 (включительно) до 18 - Добрый день
◦ от 18 (включительно) до 23 - Добрый вечер
• Если число в переменной $hour не попадает ни в один из вышеперечисленных 
диапазонов, то присвойте переменной $welcome значение Доброй ночи
• Между тэгами <h1></h1> вместо строки Добро пожаловать на наш сайт! напишите:
<?php echo $welcome?>, Гость!
 */
/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int)date("H");
$welcome = "My friend";
$answer;

if($hour > 0 && $hour < 6) {
        $answer =  "Good night!";
} elseif ($hour >= 6 && $hour < 12) {
        $answer =  "Good morning!";
} elseif ($hour >= 12 && $hour < 18) {
        $answer =  "Good day!";
} elseif ($hour >= 18 && $hour < 23) {
        $answer =  "Good evening!";
} else {
        $welcome = "Good night!";
}
 ?>

<?php
/*A task 2
• Создайте пример динамического меню для сайта
<?php
$leftMenu = array(
'home'=>'index.php', 
'about'=>'about.php', 
'contacts'=>'contact.php',
'table'=>'table.php',
'calc'=>'calc.php'
);
?>
• В значениях атрибута href тэгов <a> вместо текущих значений выведите значения 
элементов массива $leftMenu по следующему образцу:
<li><a href='<?= $leftMenu['home']?>'>Домой</a></li>
 */

$leftMenu = array(
	'home'=>'index.php', 
	'about'=>'about.php', 
	'contacts'=>'contact.php',
	'table'=>'table.php',
	'calc'=>'calc.php'
	);

?>       


<?php
/*A task 3
С помощью конструкции Switch
Выведите фразу «это рабочий день» или «это выходной день»
В зависимости от дня недели. Сами создайте переменную date и запишите в нее случайное число от 1 до 7.
Внимание: предусмотрите ситуацию с конструкией default (и укажите такое число, при котором она отработает).
*/

$randomNumber = rand(1, 8);

switch ($randomNumber) {
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
        	$day = "Это рабочий день";
                break;
        case 6:
        case 7:
                $day = "Это выходной день";
                break;
	default:
		$day = "Такого дня недели не существует!";

	}
?>


<?php 
/*A task 4
1. Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. 
2. Дано число. Увеличьте его на 30%, на 120%. 
3. Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.
*/

if($_POST['submit_1']) {
	if(is_numeric($_POST['value_num_1'])) {
		$result = $_POST['value_num_1'];
		$value_1 = $result % 3;
		$value_2 = $result % 5;
	} else {
		echo "Enter again!";

	}
} elseif($_POST['submit_2']) {
	if(is_numeric($_POST['value_num_2'])) {
		$result = $_POST['value_num_2'];
		$value_1 = $result + $result / 100 * 30;
		$value_2 = $result + $result / 100 * 120;
		$value_3 = $value_1 + $value_1 / 100 * 120;
	} else {
		echo "Enter again!";

	}
} elseif($_POST['submit_3']) {
	if(is_numeric($_POST['value_num_3']) && is_numeric($_POST['value_num_4'])) {
		$result_1 = $_POST['value_num_3'];
		$result_2 = $_POST['value_num_4'];
		$value_1 = $result_1 * 0.40;
		$value_2 = $result_2 * 0.84;
		
		
	} else {
		echo "Enter again!";

	}
} 
?>


<?php 
/*A task 5
1. Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30. Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза. 
2. Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка" 
3. Дано два числа. Вывести наибольшее из них. 
4. Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет' Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'. 
5.Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.
6. Вычислите значение выражения  Перед вычислением проверить корректность значений переменных.
*/

if($_POST['submit_4']) {
	if((is_numeric($_POST['value1_1']) && is_numeric($_POST['value1_2'])) || (is_numeric($_POST['value1_1']) || is_numeric($_POST['value1_2']))) {
		$value1 = $_POST['value1_1'];
		if($value1 > 10) {
			$value1 += 100;
		} else {
			$value1 -= 30;
		}
		$value2 = $_POST['value1_2'];
		if($value2 % 2) {
			$value2 /=2;
		} else {
			$value2 *=3;
		}
	} elseif(is_numeric($_POST['value2'])) {
		$value = $_POST['value2'];
		if($value >= 50) {
			$value = sqrt($value);
		} elseif($value > 10 && $value < 30) {
			$value = 0;
		} else {
			$value = "Error";
		}
	} elseif (is_numeric($_POST['value3_1']) && is_numeric($_POST['value3_2'])) {
		$value3_1 = $_POST['value3_1'];
		$value3_2 = $_POST['value3_2'];
		$resultMaxNumber($value3_1,$value3_2);
	} elseif (is_numeric($_POST['value4_1']) && is_numeric($_POST['value4_2'])) {
		$resultMaxN = max($_POST['value4_1'],$_POST['value4_2']);
		$resultMiN = min($_POST['value4_1'],$_POST['value4_2']);
		$value4_r = $resultMaxN - $resultMiN;
		if($value4_r >= 100) {
			$value4_1 = "Да,значение отличается на 100 и выше";
		} elseif($value4_r <= 20) {
			$value4_1 = "Да,значение не более 20";
		} else {
			$value4_1 = "Нет";
		}
	} elseif(is_numeric($_POST['value5'])) {
		if($_POST['value5'] >= 1 && $_POST['value5'] < 3 || $_POST['value5'] == 12){
			$value5 = "Зима";
		} elseif($_POST['value5'] >= 3 && $_POST['value5'] < 6){
			$value5 = "Весна";
		} elseif($_POST['value5'] >= 6 && $_POST['value5'] < 9){
			$value5 = "Весна";
		} elseif($_POST['value5'] >= 9 && $_POST['value5'] < 12){
			$value5 = "Осень";
		} else {
			$value5 = "Error";
		}
	} 
}


$x = 6;
$y = 10;
$result = (6*6 - 4 * sqrt($y-1)) / sin($x) - $x;
echo $result; 
?>


<?php 
/*A task 6
По клику на ссылку Table перейдешь на файл table.php
Составить таблицу сравнения типов данных и таблицу результатов работы функции gettype
Вывести таблица на странице, при помощи тега table
Заполните каждую ячейку нужной функцией и выполните один раз, что бы таблица сразу сформировалась с определенными данными.
*/
?>

<?php 
/*A task 7
Написать код, который выбирает из трех чисел то, которое находится между двумя другими. 
*/
if($_POST['submit_numbers']) {
	if(is_numeric($_POST['num_1']) && is_numeric($_POST['num_2']) && is_numeric($_POST['num_3'])) {
		$arrayName = array('0' => $_POST['num_1'],
						   '1' => $_POST['num_2'],
						   '2' => $_POST['num_3']
							 );
		array_slice($arrayName, 1, -1);
	}
}
?>


<!DOCTYPE html>

<html>

<head>

	<title>IMT-academy/homeWork</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="style.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

	<div class="container">
		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task two</i></h3>
		<header>
			<nav>
				<ul style="display:inline-block;" class="nav nav-pills">
					  <li role="presentation" class="active"><a href='<?= $leftMenu['home']?>'>Home</a></li>
					  <li role="presentation"><a href='<?= $leftMenu['about']?>'>About us</a></li>
                               		  <li role="presentation"><a href='<?= $leftMenu['contact']?>'>Contacts</a></li>
				 	  <li role="presentation"><a href='<?= $leftMenu['table']?>'>Table</a></li>
    				 	  <li role="presentation"><a href='<?= $leftMenu['calc']?>'>Calc</a></li>
				</ul>

			</nav>

		</header>
		</div>

		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task one</i></h3>
		<p class="start";><?php echo $answer; ?></p>
		<h1><?php echo $welcome; ?></h1>
		</div>

		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task three</i></h3>
			<p><?php echo $day; ?></p>
		</div>
	
		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task four</i></h3>
		<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="index.php">
			<input name="value_num_1" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="submit_1" type="submit" value="Calculate" class="btn btn-primary " /></br>
			<input name="value_num_2" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="submit_2" type="submit" value="Calculate" class="btn btn-primary " /></br>
			<input name="value_num_3" type="text" class="form-control" placeholder="number one" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="value_num_4" type="text" class="form-control" placeholder="number two" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="submit_3" type="submit" value="Calculate" class="btn btn-primary" />
			
			
			<h3><?php echo $value_1;?></h3>
			<h3><?php echo $value_2;?></h3>
			<h3><?php echo $value_3;?></h3>
		</form>
		</div>

		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task five</i></h3>
			
			<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="index.php">
			
				<p>1. Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30. Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.</p>
				<input name="value1_1" type="text" class="form-control" placeholder="number 1" style="width: 100px; display: inline; margin: 0 5px;" />
				<input name="value1_2" type="text" class="form-control" placeholder="number 2" style="width: 100px; display: inline; margin: 0 5px;" />
				 <p><?php echo $value1; ?></p>
				 <p><?php echo $value2; ?></p>
	
				<p>2. Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка"</p>
				<input name="value2" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
				<p><?php echo $value; ?></p>

				<p>3. Дано два числа. Вывести наибольшее из них.</p>
				<input name="value3_1" type="text" class="form-control" placeholder="number 1" style="width: 100px; display: inline; margin: 0 5px;" />
				<input name="value3_2" type="text" class="form-control" placeholder="number 2" style="width: 100px; display: inline; margin: 0 5px;" />
				<p><?php echo $resultMaxNumber;?></p>

				<p>4. Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет' Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.</p>
				<input name="value4_1" type="text" class="form-control" placeholder="number 1" style="width: 100px; display: inline; margin: 0 5px;" />
				<input name="value4_2" type="text" class="form-control" placeholder="number 2" style="width: 100px; display: inline; margin: 0 5px;" />
				<p><?php echo $value4_1;?></p>

				<p>5.Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.</p>
				<input name="value5" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
				<p><?php echo $value5;?></p>

	        <input name="submit_4" type="submit" value="Calculate" class="btn btn-primary btn-lg btn-block" />
	        
		</form>
		</div>

		<div class="jumbotron" style="text-align: center; margin: 20px 0 5px"><h3><i>Task five</i></h3>
		<form style="padding: 10px; background: #eee; border-radius: 6px;" method="post" action="index.php">
			<input name="num_1" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="num_2" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="num_3" type="text" class="form-control" placeholder="number" style="width: 100px; display: inline; margin: 0 5px;" />
			<input name="submit_numbers" type="submit" value="Calculate" class="btn btn-primary" />
			
			
			<h3><?php echo $arrayName[1];?></h3>
		</form>
		</div>
	</div>

</body>

</html>
