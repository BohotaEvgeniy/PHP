<?php require_once 'db.php'?>

<?php
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
        addUser($data['userLogin'], $data['userPassword']);
    } else {
        echo '<div>' . array_shift($errors) . '</div>'; // вывод ошибки
    }
}
?>

<?php
function addUser ($userLogin, $userPassword)
{
    $containStrLogin = strtolower($userLogin); // Храним Логин
    $containStrPass = password_hash($userPassword,PASSWORD_DEFAULT); // Храним Пароль
    $pathDb = includeDB(); // Подключение к БД
    if ($pathDb) { // Проверка на подключение к БД
        $containStr = "SELECT * FROM `users` WHERE `login` LIKE '%$containStrLogin%'";
        $selectDb = requireDB($pathDb,$containStr); //Подготовили шаблон
        if ($selectDb->num_rows) { //Проверка на логин в БД
            echo "Login exist!" . "</br>";
            echo "Enter login again!" . "</br>";
        }
        else { // Заносим в БД
            includeIntoDB($pathDb,$containStrLogin,$containStrPass); //Подготовили шаблон
            echo "<h1>" . "You has registered!!!" . "</h1>";
        }
        //Если вставка прошла успешно
        closeDB($pathDb);
    } else {
        echo "Not contact with DB";
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
                    <i class="material-icons prefix">vpn_lock</i>
                    <input id="icon_name" type="password" maxlength="25" name="userPassword2" required class="validate" value="<?php echo $data['userPassword2']; ?>">
                    <label for="icon_name">Password repeat</label>
                </div>
                <div class="input-field col s12">
                    <input class="waves-effect waves-light btn" type="submit" name="action" value="Регистрация">
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
