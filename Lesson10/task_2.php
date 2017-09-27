<?php include 'db_2.php' ?>
<?php
/**
 * Є дві таблиці:
- users - користувачі (users_id, name)
- orders - замовлення (orders_id, users_id, status)
1) Вибрати Id замовлення та відповідних користувачів з таблиці users, в яких записи в таблиці orders мають status = 0;
2) Вибрати користувачів в яких є невиконані замовлення, status = 0;
3) Вибрати Id, ім'я, та кількість замовлень всіх користувачів з таблиці users, в яких 3 і більше записів поля
'status' = '1' в таблиці orders
Таблиця users:
users_id	name
1	Alex
2	Max
3	Helena
4	Mark
5	Nick
6	Pete
7	Lora
таблиця orders:
order_id	users_id	status
100	1	0
101	2	1
102	1	0
103	3	0
...	...	...
120	4	1
121	1	1

 */
?>
<?php
$pathDb = includeDB(); // Подключаемся к БД

$query4 = 'SELECT id,cpu,`memory` FROM `PC`WHERE `memory`=3000'; // Запрос номер 4 / task 2 /
$query5 = 'SELECT MIN(hdd) AS low_HDD FROM `PC`'; // Запрос номер 5 / task 2 /
$query6 = 'SELECT COUNT(*) AS amount_PC,MIN(hdd) AS min_HDD FROM `PC` WHERE hdd IN(SELECT MIN(hdd) FROM `PC`) '; // Запрос номер 6 / task 2 /

$result4 = requireDB($pathDb,$query4); // Запрос к БД / task 2 /
$result5 = requireDB($pathDb,$query5); // Запрос к БД / task 2 /
$result6 = requireDB($pathDb,$query6); // Запрос к БД / task 2 /

$arr4 = requireDBLot($result4); // Заносим в массив / task 2 /
$arr5 = requireDBLot($result5); // Заносим в массив / task 2 /
$arr6 = requireDBLot($result6); // Заносим в массив / task 2 /

closeDB($pathDb);  // закрываем БД
?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Compiled materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<div class="container">
    <div class="row" style="text-align: center">
        <table class="bordered centered">
            <thead>
            <tr>
                <th>Position</th>
                <th>CPU(MHz) PC</th>
                <th>Memory(Mb) PC</th>
            </tr>
            </thead>
            <tbody>
            <? for ($i = 0; $i < count($arr4); $i++): ?>
                <tr>
                    <td><? echo $arr4[$i]->id; ?></td>
                    <td><? echo $arr4[$i]->cpu; ?></td>
                    <td><? echo $arr4[$i]->memory; ?></td>
                </tr>
            <? endfor;?>
            </tbody>
        </table>

        <table class="highlight centered">
            <thead>
            <tr>
                <th>Low HDD</th>
            </tr>
            </thead>
            <tbody>
            <? for ($i = 0; $i < count($arr5); $i++): ?>
                <tr>
                    <td><? echo $arr5[$i]->low_HDD; ?></td>
                </tr>
            <? endfor;?>
            </tbody>
        </table>

        <table class="highlight centered">
            <thead>
            <tr>
                <th>Quantity PC</th>
                <th>Min_HDD</th>
            </tr>
            </thead>
            <tbody>
            <? for ($i = 0; $i < count($arr6); $i++): ?>
                <tr>
                    <td><? echo $arr6[$i]->amount_PC; ?></td>
                    <td><? echo $arr6[$i]->min_HDD; ?></td>
                </tr>
            <? endfor;?>
            </tbody>
        </table>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

</body>
</html>

