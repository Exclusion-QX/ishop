<?php

include ROOT . '/views/layouts/header.php';

/** @var array $productsInCart */
/** @var array $products */
/** @var int $totalPrice */
/** @var int $totalQuantity */
?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <h2 class="title text-center">Корзина</h2>
                    <div class="cart_table">
                        <?php if ($productsInCart): ?>

                            <table class="table-bordered table-striped table">
                                <tr>
                                    <th>Изображение</th>
                                    <th>Название</th>
                                    <th>Стомость, руб.</th>
                                    <th>Количество, шт</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td><img src="<?php echo $product['image']; ?>"></td>
                                        <td>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $product['price']; ?></td>
                                        <td><?php echo $productsInCart[$product['id']]; ?></td>
                                        <td>
                                            <a href="/cart/delete/<?php echo $product['id']; ?>">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="2">Общая стоимость:</td>
                                    <td><?php echo $totalPrice; ?></td>
                                    <td>Общее количество: <?php echo $totalQuantity; ?></td>

                                </tr>

                            </table>

                        <?php else: ?>
                        <div class="text-center">
                            <p>Корзина пуста</p>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>