<?php

class ProductController
{

    public function actionView(int $productId): bool
    {

        $product = Product::getProductById($productId);

        $categories = Category::getCategoriesByProduct($productId);

        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}