<? include 'db.php' ?>
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
    $query = 'SELECT o.orders_id,u.name FROM orders o INNER JOIN users u ON o.users_id=u.users_id and o.`status`=0'; // Запрос номер 1
    $query2 = 'SELECT u.name FROM users u INNER JOIN orders o ON o.users_id=u.users_id and o.`status`=0'; // Запрос номер 2
    $query3 = 'SELECT u.users_id,u.name,COUNT(*) AS amount_orders FROM users u INNER JOIN orders o ON o.users_id=u.users_id AND o.`status`=1 GROUP BY u.users_id,u.name HAVING COUNT(*) > 3'; // Запрос номер 3
    $result = requireDB($pathDb,$query); // Запрос к БД
    $result2 = requireDB($pathDb,$query2); // Запрос к БД
    $result3 = requireDB($pathDb,$query3); // Запрос к БД
    $arr = requireDBLot($result); // Заносим в массив
    $arr2 = requireDBLot($result2); // Заносим в массив
    $arr3 = requireDBLot($result3); // Заносим в массив
    closeDB($pathDb);
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
                            <th>Order</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    <? for ($i = 0; $i < count($arr); $i++): ?>
                        <tr>
                            <td><? echo $arr[$i]->orders_id; ?></td>
                            <td><? echo $arr[$i]->name; ?></td>
                        </tr>
                    <? endfor;?>
                    </tbody>
                </table>

                <table class="highlight centered">
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? for ($i = 0; $i < count($arr2); $i++): ?>
                        <tr>
                            <td><? echo $arr2[$i]->name; ?></td>
                        </tr>
                    <? endfor;?>
                    </tbody>
                </table>

                <table class="highlight centered">
                    <thead>
                    <tr>
                        <th>Number user</th>
                        <th>Name</th>
                        <th>Amount orders</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? for ($i = 0; $i < count($arr); $i++): ?>
                        <tr>
                            <td><? echo $arr3[$i]->users_id; ?></td>
                            <td><? echo $arr3[$i]->name; ?></td>
                            <td><? echo $arr3[$i]->amount_orders; ?></td>
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

