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
        $files = 'files/users.txt'; // создаем файл в директории
        $containStr .= strtolower($data['userLogin']) . '|||' . password_hash($data['userPassword'],PASSWORD_DEFAULT) . PHP_EOL; // готовая строка логин + пароль
        if(!stristr(file_get_contents($files), $data['userLogin'])){ // Проверка на вхождение логина в строку(users.txt)
            file_put_contents($files,$containStr,FILE_APPEND | LOCK_EX); // Вписываем логин + пароль
        } else {
            echo 'Enter other "Login".Login already exist!';
        }

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
        $password = $data['userPassword'];
        if(stristr(file_get_contents('files/users.txt'), strtolower($data['userLogin']))){ // проверка на совпадение логина в строке
            $file_handle = fopen('files/users.txt', "r"); // Считываем файл
            while (!feof($file_handle)) {  // Пока файл не достигнет конца
                $tmp = fgets($file_handle); // Считываем строку
                if (stristr($tmp,$data['userLogin'])) { // еще проверка на совпадение логина в конкретной строке
                   if (password_verify($password,trim(stristr($tmp,"$2y$10$")) )) { // проверка на правильность пароля пользователя
                        echo "Welcome to home mr.";
                        $_SESSION['name'] = $data['userLogin'];
                        exit;
                    } else {
                       echo "Wrong password";
                   }
                }
            }
            fclose($file_handle);

        } else {
            echo "You don't register'";
        }

    } else {
        echo '<div>' . array_shift($errors) . '</div>';
    }
}