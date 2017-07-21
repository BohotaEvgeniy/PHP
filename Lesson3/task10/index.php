<? include("mass.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <? if($pages):?>
    <ul class="clearfix">
        <? foreach ($pages as $menu) {
            if($menu->visible) {
                echo "<li class='menu_link'><a href=".$menu->url.">$menu->name</a></li>";
            } else { // этого быть не должно
                echo "<li class='menu_link'><a class='red' href=".$menu->url.">$menu->name</a></li>";
            }
        }
        ?>
    </ul>
    <? endif ?>
    <div class="container">
      <div class="row">
        <h2 class="h2_title">Каталог товаров</h2>
      </div>
    </div>  
  </header>

  <div class="container">
    <div class="row">
    <? if($products) :?>
    <? foreach ($products as $product) :?>
      <div class="one-third column" style="margin-top: 5%">
        
                    <? if($product->visible):?>
                    <span class="date"><? echo date('m.d.y',strtotime($product->created)) ?></span>
                            <div class="image"></div>
                            <div class="product_name">
                                <a href="<? echo $product->url ?>"><? echo $product->name ?></a>
                            </div>
                            <div class="product_price">
                               Цена <? echo $product->variants[0]->price ?>
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

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
