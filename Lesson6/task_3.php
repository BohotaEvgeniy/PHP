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
            <div class="row">
                <div class="col s6">
                    <form class="col s12" method="get" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="file" class="validate" name="user">
                                <label for="icon_prefix">Name</label>
                                <input class="btn waves-effect waves-light" type="submit" name="action" value="submit">
                                <i class="material-icons right-align">send</i>
                                </input
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col s6">

                </div>
            </div>
        </div>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
