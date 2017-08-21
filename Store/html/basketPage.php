<? if (!empty($cart->items)) :?>
<div class="cart">
    <h2>Products</h2>
    <div class="row">
        <div class="two columns">Фото</div>
        <div class="two columns">Наименование</div>
        <div class="two columns">Цена, грн</div>
        <div class="two columns">Кол-во</div>
        <div class="two columns">Сумма</div>
        <div class="two columns"></div>
    </div>
    <? foreach ($cart->items as $key => $value) :?>
        <div class="row">
            <div class="two columns"><img src="files/images/cell.png" alt="phone"></div>
            <div class="two columns"><?php echo $cart->items[$key]->name ?></div>
            <div class="two columns"><?php echo $cart->items[$key]->costOneProduct?></div>
            <div class="two columns"><? echo $cart->items[$key]->amount; ?></div>
            <div class="two columns"><? echo $cart->items[$key]->cost ?></div>
            <div class="two columns">
                <form action="" method="get">
                    <input type="submit" class="button button-primary" name="buyProduct" value="buy">
                    <input type="submit" class="button button-primary" name="clear" value="Clear cart">
                </form>
            </div>
        </div>
    <? endforeach; ?>
    <div class="row">
        <form action="" method="post">
            <label for="">Name</label>
            <input type="text" name="user" required></br>
            <label for="">Soname</label>
            <input type="text" name="surname" required></br>
            <label for="">Mail</label>
            <input type="email" name="email" required></br>
            <label for="">Phone</label>
            <input type="tel" name="phone" required></br>
            <label for="">Adress</label>
            <input type="text" name="adress" required></br>
            <label for="">Remark</label>
            <input type="text" name="text"></br>
            <input class="btn button-primary" type="submit" value="submit" name="submitList">
        </form>
    </div>
<? else :?>
    <h2>Корзина пуста</h2>
<? endif; ?>
</div>
