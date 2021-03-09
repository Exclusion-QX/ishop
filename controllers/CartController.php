<?php

class CartController
{

    public function actionAdd(int $id): bool
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);

        Product::updateProductQuantity($id);

        return true;
    }

    public function actionDelete(int $id)
    {
        //Удаление товара из корзины
        Cart::deleteProduct($id);
        header("Location: /cart");
    }

    public function actionIndex(): bool
    {

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {

            $productsIds = array_keys($productsInCart);

            $products = Product::getProductsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);

            $totalQuantity = Cart::countItems();
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }

}
