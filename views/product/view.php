<?php

include ROOT . '/views/layouts/header.php';

/** @var int $product */
/** @var array $categories */

?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 padding-right">
                    <div class="product-details">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img src="<?php echo $product['image']; ?>" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-information">
                                    <h2><?php echo $product['name']; ?></h2>
                                    <span>
                                    <span><?php echo $product['price']; ?> руб.</span>

                                    <?php if ($product['quantity'] > 0): ?>
                                        <button type="button" class="btn btn-default cart add-to-cart" id="btn-buy"
                                                data-id="<?php echo $product['id']; ?>">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                    <?php else: ?>
                                        Товара нет в наличии
                                    <?php endif; ?>
                                </span>
                                    <p><b>Наличие:</b></p>
                                    <p id="product-quantity"><?php echo $product['quantity']; ?></p>
                                    <p><b>Категории:</b></p>
                                    <p><?php foreach ($categories as $category):
                                            echo $category['title'] . "  ";
                                        endforeach;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Описание товара</h5>
                                <p><?php echo $product['description']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <br/>
    <br/>

<?php include ROOT . '/views/layouts/footer.php'; ?>