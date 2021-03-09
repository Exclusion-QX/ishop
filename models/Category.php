<?php


class Category
{

    public static function getCategoriesList(): array
    {

        $sql = 'SELECT * FROM category';
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetchAll($sql, $mode);
    }

    public static function getCategoriesByProduct(int $idProduct): array
    {
        $sql = 'SELECT c.title FROM product_category pc '
            .'INNER JOIN category c ON pc.category_id = c.id WHERE pc.product_id ='. $idProduct;
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetchAll($sql, $mode);
    }

}