<?php


class SiteController
{

    public function actionIndex(): bool
    {

        $products = array();
        $products = Product::getInexpensiveProduct();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}