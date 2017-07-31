<?php
/*
Задача 3
Используя готовый массив с обьектами категорий, который лежит в файле
categories_array.php, постоить дерево категорий.
То есть написать функцию, которая будет вкладывать друг в друга категории, если они ей принадлежат.
Связка идет по двум параметрам
Id – id самой категории
Parent_id – id родительской категории (Если равен 0 значит категория 1-го уровня)
При проходе, должен получиться массив с обьектами, внутри которого может быть вложенный
массив subcategories (пример смотрите в файле functions.php)
То есть, вы создадите сами поле subcategories, в котором будет вложен массив с обьектами его подкатегорий
*/
?>
<?php
header('content-type:text/html;charset=utf8');
?>
<?php
$clear_categories = 'a:16:{i:0;O:8:"stdClass":20:{s:2:"id";s:2:"54";s:9:"parent_id";s:1:"0";s:3:"url";s:17:"tehnika-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"54";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Техника для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Техника для дома";s:13:"meta_keywords";s:30:"Техника для дома";s:16:"meta_description";s:30:"Техника для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:1;O:8:"stdClass":20:{s:2:"id";s:2:"59";s:9:"parent_id";s:1:"0";s:3:"url";s:16:"detskie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"59";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:00";s:4:"name";s:29:"Детские игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские игрушки";s:13:"meta_keywords";s:29:"Детские игрушки";s:16:"meta_description";s:29:"Детские игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:2;O:8:"stdClass":20:{s:2:"id";s:2:"62";s:9:"parent_id";s:1:"0";s:3:"url";s:8:"gadzhety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"62";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:14:"Гаджеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Гаджеты";s:13:"meta_keywords";s:14:"Гаджеты";s:16:"meta_description";s:14:"Гаджеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:3;O:8:"stdClass":20:{s:2:"id";s:2:"68";s:9:"parent_id";s:1:"0";s:3:"url";s:15:"mebel-dlya-doma";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"68";s:11:"level_depth";s:1:"1";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:35";s:4:"name";s:28:"Мебель для дома";s:7:"name_h1";s:0:"";s:10:"meta_title";s:28:"Мебель для дома";s:13:"meta_keywords";s:28:"Мебель для дома";s:16:"meta_description";s:28:"Мебель для дома";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:4;O:8:"stdClass":20:{s:2:"id";s:2:"55";s:9:"parent_id";s:2:"54";s:3:"url";s:15:"vodonagrevateli";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"55";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:18:43";s:4:"name";s:30:"Водонагреватели";s:7:"name_h1";s:0:"";s:10:"meta_title";s:30:"Водонагреватели";s:13:"meta_keywords";s:30:"Водонагреватели";s:16:"meta_description";s:30:"Водонагреватели";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:5;O:8:"stdClass":20:{s:2:"id";s:2:"58";s:9:"parent_id";s:2:"54";s:3:"url";s:20:"radiatory-otopleniya";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"58";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:37:"Радиаторы отопления";s:7:"name_h1";s:0:"";s:10:"meta_title";s:37:"Радиаторы отопления";s:13:"meta_keywords";s:37:"Радиаторы отопления";s:16:"meta_description";s:37:"Радиаторы отопления";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:6;O:8:"stdClass":20:{s:2:"id";s:2:"56";s:9:"parent_id";s:2:"55";s:3:"url";s:15:"gazovye-kolonki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"56";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:29:"Газовые колонки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Газовые колонки";s:13:"meta_keywords";s:29:"Газовые колонки";s:16:"meta_description";s:29:"Газовые колонки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:7;O:8:"stdClass":20:{s:2:"id";s:2:"57";s:9:"parent_id";s:2:"55";s:3:"url";s:7:"bojlery";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"57";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:46";s:4:"name";s:14:"Бойлеры";s:7:"name_h1";s:0:"";s:10:"meta_title";s:14:"Бойлеры";s:13:"meta_keywords";s:14:"Бойлеры";s:16:"meta_description";s:14:"Бойлеры";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:8;O:8:"stdClass":20:{s:2:"id";s:2:"60";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"detskie-mashinki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"60";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:29:"Детские машинки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:29:"Детские машинки";s:13:"meta_keywords";s:29:"Детские машинки";s:16:"meta_description";s:29:"Детские машинки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:9;O:8:"stdClass":20:{s:2:"id";s:2:"61";s:9:"parent_id";s:2:"59";s:3:"url";s:16:"myagkie-igrushki";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"61";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 16:37:10";s:4:"name";s:27:"Мягкие игрушки";s:7:"name_h1";s:0:"";s:10:"meta_title";s:27:"Мягкие игрушки";s:13:"meta_keywords";s:27:"Мягкие игрушки";s:16:"meta_description";s:27:"Мягкие игрушки";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:10;O:8:"stdClass":20:{s:2:"id";s:2:"63";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"smartfony";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"63";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:22";s:4:"name";s:18:"Смартфоны";s:7:"name_h1";s:0:"";s:10:"meta_title";s:18:"Смартфоны";s:13:"meta_keywords";s:18:"Смартфоны";s:16:"meta_description";s:18:"Смартфоны";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:11;O:8:"stdClass":20:{s:2:"id";s:2:"65";s:9:"parent_id";s:2:"62";s:3:"url";s:9:"planshety";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"65";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-14 13:19:23";s:4:"name";s:16:"Планшеты";s:7:"name_h1";s:0:"";s:10:"meta_title";s:16:"Планшеты";s:13:"meta_keywords";s:16:"Планшеты";s:16:"meta_description";s:16:"Планшеты";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:12;O:8:"stdClass":20:{s:2:"id";s:2:"64";s:9:"parent_id";s:2:"63";s:3:"url";s:6:"xiaomi";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"64";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:45";s:4:"name";s:6:"Xiaomi";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Xiaomi";s:13:"meta_keywords";s:6:"Xiaomi";s:16:"meta_description";s:6:"Xiaomi";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:13;O:8:"stdClass":20:{s:2:"id";s:2:"67";s:9:"parent_id";s:2:"63";s:3:"url";s:5:"meizu";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"67";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:5:"Meizu";s:7:"name_h1";s:0:"";s:10:"meta_title";s:5:"Meizu";s:13:"meta_keywords";s:5:"Meizu";s:16:"meta_description";s:5:"Meizu";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:14;O:8:"stdClass":20:{s:2:"id";s:2:"66";s:9:"parent_id";s:2:"65";s:3:"url";s:6:"lenovo";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"66";s:11:"level_depth";s:1:"3";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-17 14:03:44";s:4:"name";s:6:"Lenovo";s:7:"name_h1";s:0:"";s:10:"meta_title";s:6:"Lenovo";s:13:"meta_keywords";s:6:"Lenovo";s:16:"meta_description";s:6:"Lenovo";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}i:15;O:8:"stdClass":20:{s:2:"id";s:2:"69";s:9:"parent_id";s:2:"68";s:3:"url";s:13:"kreslo-meshok";s:5:"image";s:0:"";s:7:"visible";s:1:"1";s:8:"position";s:2:"69";s:11:"level_depth";s:1:"2";s:11:"yandex_name";s:0:"";s:11:"last_modify";s:19:"2017-04-21 17:17:08";s:4:"name";s:23:"Кресло мешок";s:7:"name_h1";s:0:"";s:10:"meta_title";s:23:"Кресло мешок";s:13:"meta_keywords";s:23:"Кресло мешок";s:16:"meta_description";s:23:"Кресло мешок";s:10:"annotation";s:0:"";s:11:"description";s:0:"";s:15:"auto_meta_title";s:0:"";s:18:"auto_meta_keywords";s:0:"";s:14:"auto_meta_desc";s:0:"";s:16:"auto_description";s:0:"";}}';
$categories_data = unserialize($clear_categories);
?>

<?php

function GetCategoriesTree($categories,$parent_id=0) {

    $results=array();

    if ($categories) {
        echo "<ul>";
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                $result = $category;
                echo "<li style='list-style: none'><a>$category->name</a></li>";
                if ($category->id!=$parent_id) {
                    $result->subcategories = GetCategoriesTree($categories, $category->id);
                    $results[] = $result;
                    unset($result);
                }
            }
        }
        echo "</ul>";
    }
    return $results;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>OkaY</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">


</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row">
        <aside>
            <?php GetCategoriesTree($categories_data); ?>
        </aside>
    </div>
</div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
?>