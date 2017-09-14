<?php header('Content-type:text/html;charset=utf-8;')?>
<?php

function includeDB ($dbHost, $dbLogin, $dbPass, $dbName){
    if (!empty($dbHost) && !empty($dbLogin) && (!empty($dbPass) || empty('')) && !empty($dbName)) {

        define("DB_HOST", $dbHost);
        define("DB_LOGIN", $dbLogin);
        define("DB_PASS", $dbPass);
        define("DB_NAME", $dbName);

        $link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME); // подключаемся к БД
        if (!$link) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
        echo 'Соединение установлено... ' . mysqli_get_host_info($link) . "</br>";
        return $link;
    }
}


/******************************************************************************/

function requireDBLot ($link) {
    if (!empty($link)) {
        $query = "SELECT * FROM Users"; // Любой запрос на усмотрение
        /*Выполняем запрос в БД*/
        $res = mysqli_query($link, $query);

        //Отображение результата в виде массива
        while ($row = mysqli_fetch_assoc($res)) {
            $results[] = $row;
        }
        print_r($results);
    }
}
//requireDBLot(includeDB($_SERVER['SERVER_NAME'],'root','','people'));

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
//requireDbOne(includeDB($_SERVER['SERVER_NAME'],'root','','people'));

/******************************************************************************/

function addUser ($pathDb, $containStrLogin, $containStrPass) {
    if (!empty($pathDb)){
        $query = "INSERT INTO `users` (`login`,`password`) VALUES ('$containStrLogin','$containStrPass')";
        mysqli_query($pathDb, $query);
    }
}
