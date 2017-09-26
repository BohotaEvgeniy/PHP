<?php header('Content-type:text/html;charset=utf-8;')?>
<?php

function includeDB (){  // Функция подключения к БД
    define("DB_HOST", 'localhost');
    define("DB_LOGIN", 'root');
    define("DB_PASS", '');
    define("DB_NAME", 'people');

    $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME); // подключаемся к БД
    if (!$link) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    echo 'Соединение установлено... ' . mysqli_get_host_info($link) . "</br>";
    return $link;
}

/******************************************************************************/

function requireDB ($pathDb,$containStr) { // Функция запроса к БД
    $query = mysqli_query($pathDb, $containStr);

    return $query;

}

/******************************************************************************/

function closeDB ($pathDb) { // Функция закрытия БД
    mysqli_close($pathDb); // Закрываем соединение
}

/******************************************************************************/

function requireDBLot ($resultAllUsers) { // Функция конвертирования в массив
    if (!empty($resultAllUsers)) {
        //Отображение результата в виде массива
        while ($row = mysqli_fetch_object($resultAllUsers)) { // заносим в массив БД
            $results[] = $row;
        }
        return $results;
    }
}

/******************************************************************************/



