<?php


class CategoryController
{

    public function actionIndex(): bool
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        require_once(ROOT . '/views/category/index.php');

        return true;
    }

    public function actionView(int $idCategory): bool
    {
        $products = array();
        $products = Product::getProductByIdCategory($idCategory);

        require_once(ROOT . '/views/category/view.php');

        return true;
    }

}