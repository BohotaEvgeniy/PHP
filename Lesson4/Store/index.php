<? include("menu.php"); ?>
<? include("products.php"); ?>
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
                <h1><a href="">Brand</a></h1>
            </div>
            <div class="ten columns">

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
            <? if($products) :?>
                <? foreach ($products as $product) :?>
                    <div class="one-third column" style="margin-top: 5%">
                        <? if($product->visible):?>
                            <span class="date"><? echo date('m.d.y',strtotime($product -> created)) ?></span>
                            <div class="image"> Image </div>
                            <div class="product_name">
                                <a href="<? echo $product->url ?>"><? echo $product -> name ?></a>
                            </div>
                            <div class="product_price">
                                Цена <? echo round($product->variants[0] -> price, 2) ?>
                                <? echo $product->variants[0] -> sku ?>
                            </div>
                            <div class="product_variables">
                                <? if (count($product -> variants) > 1): ?>
                                    <select class="fix">
                                        <? foreach ($product -> variants as $v) :?>
                                            <option value="">
                                                <? echo round($v -> price, 2); ?>
                                                <? echo $v -> sku; ?>
                                            </option>
                                        <? endforeach; ?>
                                    </select>
                                <? endif; ?>
                            </div>
                            <div class="stock">
                                Товар на складе <? echo $product->variants[0]->stock ?> шт
                            </div>
                        <? endif; ?>
                    </div>
                <? endforeach; ?>
            <? endif;?>
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

