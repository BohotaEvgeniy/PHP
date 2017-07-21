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
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
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
                    <? foreach ($menu as $value) :?>
                        <? if ($value->position == 1) :?>
                            <li><a class="button button-primary" href="index.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 3) :?>
                            <li><a class="button button-primary" href="delivers.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 4) :?>
                            <li><a class="button button-primary" href="payment.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 8) :?>
                            <li><a class="button button-primary" href="#"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 9) :?>
                            <li><a class="button button-primary" href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 2) :?>
                            <li><a class="button button-primary" href="error_404.php"><? echo $value->name; ?></a></li>
                        <? endif; ?>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="two columns">
            <aside>
                <ul>
                    <? foreach ($menu as $value) :?>
                        <? if ($value->position == 12) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 6) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 7) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 9) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 10) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? elseif ($value->position == 11) :?>
                            <li><a href="error_404.php"><? echo $value->name; ?></a></li>
                        <? endif; ?>
                    <? endforeach; ?>
                </ul>
            </aside>
        </div>
        <div class="ten columns">
            <? foreach ($menu as $value) :?>
                <? if ($value->position == 8) :?>
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

