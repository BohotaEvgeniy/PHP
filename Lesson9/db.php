<?php header('Content-type:text/html;charset=utf-8;')?>
<?php

function includeDB (){
    define("DB_HOST", 'localhost');
    define("DB_LOGIN", 'root');
    define("DB_PASS", '');
    define("DB_NAME", 'register');

        $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME); // подключаемся к БД
        if (!$link) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        echo 'Соединение установлено... ' . mysqli_get_host_info($link) . "</br>";
        return $link;
}

/******************************************************************************/

function requireDB ($pathDb,$containStr) { // Выбираем пользователя
    /*Выполняем запрос в БД*/
    $query = mysqli_query($pathDb, $containStr); // Любой запрос на усмотрение

    return $query;

}

/******************************************************************************/

function includeIntoDB ($pathDb,$containStrLogin,$containStrPass) { // Добавляем в БД пользователя
    /*Выполняем запрос в БД*/
    mysqli_query($pathDb, "INSERT INTO `users` (`login`,`password`) VALUES ('$containStrLogin','$containStrPass')"); // Любой запрос на усмотрение

}

/******************************************************************************/

function closeDB ($pathDb) { // Добавляем в БД пользователя
    /*Закрываем БД*/
    mysqli_close($pathDb); // Закрываем соединение

}

/******************************************************************************/

function requireDBLot ($resultAllUsers) {
    if (!empty($resultAllUsers)) {
        //Отображение результата в виде массива
        while ($row = mysqli_fetch_object($resultAllUsers)) { // заносим в массив БД
            $results[] = $row;
        }
        return $results;
    }
}

/******************************************************************************/

function requireDBOne ($link) {
   if (!empty($link)) {
        $query = "SELECT city FROM Users WHERE user_id = '4' "; // Любой запрос на усмотрение
        /*Выполняем запрос в БД*/
        $res = mysqli_query($link, $query);
        $row = mysqli_fetch_row($res);
        echo $row[0];

        mysqli_close($link);
   }
}

/******************************************************************************/


