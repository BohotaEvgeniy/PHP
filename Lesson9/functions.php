<?php require_once 'db.php'?>
<?php
session_start();
$data = $_POST;
if ( isset($data['action']) ) {  // Если кнопка нажата

    $errors = array();
    if ( !preg_match('/^[a-zA_Z0-9-]{4,}/i',$data['userLogin']) && (trim($data['userLogin']) != '')){   // Если  не  соответствует Pregmatch(regular) логину и поле логин не пустое
        $errors[] = "Enter login.Login isn't correct.Enter please numbers or letters not less 4 symbols";
    }

    if ( !preg_match('/^[a-zA_Z0-9]{4,}/i',$data['userLogin']) && ($data['userPassword'] != '') ){  // Если  не  соответствует Pregmatch(regular) пароль и поле пароль не пустое
        $errors[] = "Enter Password";
    }

    if ( trim($data['userPassword2']) != $data['userPassword'] ){ // еще одна проверка на пароль
        $errors[] = "Enter Password repeat";
    }

    if ( empty($errors) ) {   // Если массив ошибок пуст,тогда
        $pathDb = includeDB('localhost','root','','register'); // Подключение к БД
        $containStrLogin = strtolower($data['userLogin']); // Храним Логин
        $containStrPass = password_hash($data['userPassword'],PASSWORD_DEFAULT); // Храним Пароль
        $a = mysqli_query($pathDb,"SELECT * FROM `users` WHERE `login` LIKE '%$containStrLogin%'"); //Подготовили шаблон
        if ($a->num_rows) { //Проверка на логин в БД
            echo "Login exist!" . "</br>";
            echo "Enter login again!" . "</br>";
        }
        elseif ($pathDb) { // Заносим в БД
            addUser($pathDb, $containStrLogin, $containStrPass);
            echo "<h1>" . "You has registered!!!" . "</h1>";
        }
        //Если вставка прошла успешно
        mysqli_close($pathDb); // Закрываем соединение
    } else {
        echo '<div>' . array_shift($errors) . '</div>'; // вывод ошибки
    }
}

/****************************************************************************************************/

if ( isset($data['submit']) ) {

    $errors = array();
    if ( !preg_match('/^[a-zA_Z0-9-]{4,}/i',$data['userLogin']) && (trim($data['userLogin']) != '')){
        $errors[] = "Enter login.Login isn't correct.Enter please numbers or letters not less 4 symbols";
    }

    if ( !preg_match('/^[a-zA_Z0-9]{4,}/i',$data['userLogin']) && ($data['userPassword'] != '') ){
        $errors[] = "Enter Password";
    }

    if ( empty($errors) ) {
        $password = $data['userPassword']; //заносим пароль
        $pathDb = includeDB('localhost','root','','register'); // подключаемся к БД
        $containStrLogin = strtolower($data['userLogin']); // Храним Логин
        $res = mysqli_query($pathDb,"SELECT * FROM `users`"); // запрос к БД
        $a = mysqli_query($pathDb,"SELECT * FROM `users` WHERE `login` LIKE '%$containStrLogin%'"); // запрос к БД
        while($row = mysqli_fetch_object($res)) { // заносим в массив БД
            $results[] = $row;
        }
        if ($a->num_rows) { // проверка на Логин
            for ($i = 0; $i < count($results); $i++) { //перебор массива
                if ($results[$i]->login === strtolower($_POST['userLogin'])){ // проверка логина
                    if (password_verify($password,$results[$i]->password)){ // сравнение пароля с хеш
                        $_SESSION['id'] = $results[$i]->user_id; // заносим ID в сессию
                        echo "<h1>" . "Welcome " . $_POST['userLogin'] . "</h1>";
                        exit();
                    } else {
                        echo "Password not correct!" . "</br>";
                        echo "Enter password again!" . "</br>";
                    }
                }
            }
        } else {
            echo "Login not exist!" . "</br>";
            echo "Enter login again or sign in!" . "</br>";
        }
        mysqli_close($pathDb); // Закрываем соединение

    } else {
        echo '<div>' . array_shift($errors) . '</div>';
    }
}

