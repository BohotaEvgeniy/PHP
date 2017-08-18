<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 18.08.2017
 * Time: 6:47
 *
 *Задача 3
Создать форму для загрузки изображений к товару.
Сделать отдельный файл filemanager.php который должен иметь следующий функционал:
Левая часть страницы:
⦁	Форма с полей для прикрепления фото (мультизагрузка)
⦁	Вывод сообщения о том был ли загружен файл и в какую папку
Правая часть страницы:
1.Окно с отображением содержимого папки, куда загружалось фото. Отображать нужно только графические файлы.
 */
?>
<?php include 'functions/functions.php'?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>

    <!-- Compiled and minified CSS
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">-->

    <!-- Compiled and minified JavaScript
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>-->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<div class="container">
    <div class="row wrapper-row">
        <div class="col s4">
            <form class="col s12" action="#" method="post" enctype="multipart/form-data">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name=uploadfile multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                    <input class="btn" type=submit value=Submit>
                </div>
            </form>
        </div>
        <div class="col s8">
            <?php echo viewImg(); ?>
        </div>
    </div>
</div>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
