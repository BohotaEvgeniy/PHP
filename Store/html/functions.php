<?php
header('content-type:text/html;charset=utf-8');
?>
<?php
ini_set('display_errors',true);
error_reporting(E_ALL);

require_once 'data/menu.php';
require_once 'data/categories.php';
require_once 'data/products.php';

/*Построение дерева категорий*/
function makeTree($categories,$parent_id=0) {
    $results=array();
    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                if ($category->id!=$parent_id) {
                    $subcategories = makeTree($categories,$category->id);
                    if(!empty($subcategories))
                        $category->subcategories = $subcategories ;
                }
                $results[]=$category;
                unset($category);
            }
        }
    }
    return $results;
}

/*Вывод дерева категорий*/
function viewCategories($categories) {
    if($categories) { // проверка лишней не бывает
        echo "<ul>";
        foreach ($categories as $category) {
            if($category->visible) { //важная проверка, которая позволит выводит только включенные категории на сайте
                echo
                "<li>
                    <a href='?r=categories&id=".$category->id."'>$category->name</a>
                </li>";
                if(isset($category->subcategories)) {
                    // проверяем есть ли подкатегории и вызываем заново функцию для вывода
                    viewCategories($category->subcategories); // передаем в функцию уже массив обьектов покатегорий
                }
            }
        }
        echo "</ul>";
    }
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function viewMenu($pages) {
    if($pages) {
        echo '<ul>';
        foreach ($pages as $page) {
            if ($page->visible && $page->menu_id == 1) {
                if($page->url == '') {
                    echo "<li><a class='button button-primary' href='".$_SERVER['SCRIPT_NAME']."'>$page->name</a></li>";
                } else {
                    echo "<li><a class='button button-primary' href='?r=pages&id=".$page->id."'>$page->name</a></li>";
                }

            }
        }
        echo '</ul>';
    }
}
function getPage($pages,$page_id) {
    if($page_id) {
        return $pages[$page_id];
    }
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function getProduct($products,$id) {
    if($id) {
        return $products[$id];
    }
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
if(isset($_GET['buy'])) {
    if (isset($_GET['product_id']) && $_GET['amount']) {
        $product_id = strip_tags(trim($_GET['product_id']));
        $amount = strip_tags(trim($_GET['amount']));
        $cart = array();
        if (isset($_COOKIE['cart'])) {
            $cart = unserialize($_COOKIE['cart']);
            $cart[$product_id] = $amount;
            setcookie('cart', serialize($cart), time() + 3600, '/');
            header("location: http://php-master/store/index.php?r=product&id=" . $product_id);
        } else {
            $cart[$product_id] = $amount;
            setcookie('cart', serialize($cart), time() + 3600, '/');
            header("location: http://php-master/store/index.php?r=product&id=" . $product_id);
        }
    }
}
/*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function getCart($products){
    $count = 0;
    $cost = 0;
    $obj = new stdClass();
    if (isset($_COOKIE['cart'])) {
        $cart_products = unserialize($_COOKIE['cart']);
        foreach ($cart_products as $id => $amount) {
            $products_cart[$id] = getProduct($products,$id);
            $products_cart[$id]->amount = $amount;
            $products_cart[$id]->cost = $products_cart[$id]->variant->price * $amount;
            $products_cart[$id]->costOneProduct = $products_cart[$id]->variant->price;
            $cost +=  $products_cart[$id]->variant->price * $amount;
            $count += $amount;
        }
        $obj->items = $products_cart;
    }
    $obj->cost = $cost;
    $obj->count = $count;
    return $obj;
}



