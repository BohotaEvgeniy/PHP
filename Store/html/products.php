<div class="row">
    <?php if($products) :?>
        <?php $i=0; foreach ($products as $product) :?>
            <?php $i++ ?>

                <div class="one-third column">
                    <div class="image">
                        <img src="files/images/cell.png">
                    </div>
                    <div class="name">
                        <a href="?r=product&id=<?php echo $product->id ?>"><?php echo $product->name ?></a>
                    </div>
                    <div class="price">
                        <?php if(count($product->variants) > 1) :?>
                            <select name="variant">
                                <?foreach ($product->variants as $variant) :?>
                                    <option><?php echo $variant->name ?> <?php echo ceil($variant->price) ?> грн.</option>
                                <?php endforeach;?>
                            </select>
                        <?php else:?>
                            <span class="label"> <?php echo ceil($product->variant->price) ?> грн.</span>
                        <?php endif;?>
                    </div>
                </div>

            <? if($i%3 == 0):?>
                <div class="row"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif;?>
</div>