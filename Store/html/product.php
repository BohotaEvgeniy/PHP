<?php $site_page = getProduct($products,$id) ?>
<div class="row">
    <div class="twelve columns">
        <div class="image">
            <img src="files/images/cell.png">
        </div>
        <div class="name">
            <h1 class="model-phone"><?php echo $site_page->name ?></h1>
            <p class="infoAbout-phone">
                <?php if($site_page->description) :?>
            <p class="info-phone"><?php echo $site_page->description ?></p>
            <? endif; ?>
            </p>
        </div>
        <div class="price">
            <?php if(count($site_page->variants) > 1) :?>
                <select name="variant">
                    <?foreach ($site_page->variants as $variant) :?>
                        <option><?php echo $variant->name ?> <?php echo ceil($variant->price) ?> грн.</option>
                    <?php endforeach;?>
                </select>
            <?php else:?>
                <span class="label"><span>Price</span> <?php echo ceil($site_page->variant->price) ?> грн.</span></br>
                <? if($site_page->variant->name) :?>
                    <span >
                        <span>
                            <?php echo $site_page->variant->name ?>
                        </span>
                        <?php echo $site_page->variant->stock ?> шт.
                    </span>
                <? else :?>
                    <span>
                        <span>
                             В наличии
                        </span>
                        <?php echo $site_page->variant->stock ?> шт.
                    </span>
                <? endif;?>
            <?php endif;?>
        </div>
        <form method="get" action="">
            <input type="number" name="amount" value="1">
            <input type="hidden" name="product_id" value="<? echo $site_page->id; ?>"> шт.
            <input class="button-primary" type="submit" name="buy" value="Buy">
        </form>
    </div>
</div>

