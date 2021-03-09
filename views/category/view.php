<?php

include ROOT . '/views/layouts/header.php';

/** @var array $products */

?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="left-sidebar">
                        <h2 class="title text-center">Каталог</h2>
                        <div class="panel-group category-products">
                            <div class="cart_table">
                                <table class="table-bordered table">
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td><img src="<?php echo $product['image']; ?>"></td>
                                            <td>
                                                <h4 class="panel-title"><a
                                                            href="/product/<?php echo $product['id']; ?>">
                                                        <?php echo $product['name']; ?>
                                                    </a></h4>
                                            </td>
                                            <td><?php echo $product['price']; ?> руб.</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>