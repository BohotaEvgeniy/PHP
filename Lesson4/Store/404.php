<? include("menu.php"); ?>
<?php
header('content-type:text/html;charset=utf-8');
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
                <a href=""><h1>Brand</h1></a>
            </div>
            <div class="ten columns">
                <ul>

                </ul>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="three columns">
            <aside>
                <ul>
                    <? foreach ($menu as $value) :?>
                        <? if ($value->visible && $value->description != null ) :?>
                            <? if ($value->url != null ) :?>
                                <li><a class="button button-primary" href="<? echo $value->url; ?>.php"><? echo $value->name; ?></a></li>
                            <? else :?>
                                <li><a class="button button-primary" href="index.php"><? echo $value->name; ?></a></li>
                            <? endif ;?>
                        <? elseif ($value->visible) :?>
                            <li><a class="button button-primary" href="404.php"><? echo $value->name; ?></a></li>
                        <? endif; ?>
                    <? endforeach; ?>
                </ul>
            </aside>
        </div>
        <div class="nine columns">
            <? foreach ($menu as $value) :?>
                <? if ($value->position == 5) :?>
                   <? echo $value->description; ?>
                <? endif; ?>
            <? endforeach; ?>
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

