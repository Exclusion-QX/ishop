<?php

include ROOT . '/views/layouts/header.php';

/** @var array $categories */

?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="left-sidebar">
                        <h2 class="title text-center">Каталог</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center">
                                            <a href="/category/view/<?php echo $categoryItem['id']; ?>">
                                                <?php echo $categoryItem['title']; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>