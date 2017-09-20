<?php include_once 'db.php'?>
<?php session_start(); ?>
<?php
$data = $_POST;
if ( isset($data['submit']) ) {

    $errors = array();
    if (!preg_match('/^[a-zA_Z0-9-]{4,}/i', $data['userLogin']) && (trim($data['userLogin']) != '')) {
        $errors[] = "Enter login.Login isn't correct.Enter please numbers or letters not less 4 symbols";
    }

    if (!preg_match('/^[a-zA_Z0-9]{4,}/i', $data['userLogin']) && ($data['userPassword'] != '')) {
        $errors[] = "Enter Password";
    }

    if (empty($errors)) {
        $password = $data['userPassword']; //заносим пароль
        $pathDb = includeDB(); // подключаемся к БД
        $containStrLogin = strtolower($data['userLogin']); // Храним Логин
        $selectIntoDbAllU = "SELECT * FROM `users`"; // Подготовка выборки
        $selectIntoDbUser = "SELECT * FROM `users` WHERE `login` LIKE '%$containStrLogin%'"; // запрос к БД
        $resultAllUsers = requireDB($pathDb,$selectIntoDbAllU); // Выборка всех пользователей
        $resultUser = requireDB($pathDb,$selectIntoDbUser); // Выборка схожего пользователя
        $results = requireDBLot($resultAllUsers); // Заносим в мвссив
        if ($resultUser->num_rows) { // проверка на Логин
            for ($i = 0; $i < count($results); $i++) { //перебор массива
                if ($results[$i]->login === strtolower($_POST['userLogin'])) { // проверка логина
                    if (password_verify($password, $results[$i]->password)) { // сравнение пароля с хеш
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
        closeDB($pathDb); // Закрываем соединение

    } else {
        echo '<div>' . array_shift($errors) . '</div>';
    }
}

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
    <div class="row">
        <form class="col s6" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <!--<?php echo 'Welcome you have registered. Now you can log in' ;?>-->
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" maxlength="25" name="userLogin" required class="validate" value="<?php echo $data['userLogin']; ?>">
                    <label for="icon_prefix">Login</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_lock</i>
                    <input id="icon_name" type="password" maxlength="25" name="userPassword" required class="validate" value="<?php echo $data['userPassword']; ?>">
                    <label for="icon_name">Password</label>
                </div>
                <div class="input-field col s12">
                    <input class="waves-effect waves-light btn" type="submit" name="submit" value="Авторизация">
                </div>
            </div>
        </form>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

</body>
</html>
