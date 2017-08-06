<?php
/**
 * Created by PhpStorm.
 * User: Евгений
 * Date: 05.08.2017
 * Time: 6:44
 */

header('content-type:text/html;charset=utf-8');
?>
<?php require_once 'html/functions.php' ?>


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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/normalize.css">


</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header>
    <div class="container">
        <div class="row">
            <div class="two columns">
                <h1><a href="">Brand</a></h1>
            </div>
            <div class="ten columns">
                <? echo viewMenu($pages); ?>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="three columns">
            <aside>
                <?php
                $categories_tree = makeTree($categories);
                viewCategories($categories_tree);
                ?>
            </aside>
        </div>
        <div class="nine columns">
            <h2>Content</h2>
            <?php require_once 'html/content.php'?>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <p>Footer</p>
        </div>
    </div>
</footer>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>