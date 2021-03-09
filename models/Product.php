<?php


class Product
{

    const SHOW_INEXPENSIVE_PRODUCT = 10;

    public static function getProductByIdCategory(int $idCategory): array
    {
        $sql = 'SELECT p.id, p.image, p.name, p.price, pc.product_id FROM product_category pc '
        .'INNER JOIN product p ON p.id = pc.product_id WHERE pc.category_id ='. $idCategory;
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetchAll($sql, $mode);
    }

    public static function getProductById(int $id): array
    {
        $sql = 'SELECT * FROM product WHERE id ='. $id;
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetch($sql, $mode);
    }


    public static function getProductsByIds(array $idsArray): array
    {
        $idsString = implode(',', $idsArray);

        $sql = 'SELECT * FROM product WHERE id IN ('. $idsString .')';
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetchAll($sql, $mode);

    }
    /**
     * Returns products
     * @param int $count
     * @return array
     */
    public static function getInexpensiveProduct($count = self::SHOW_INEXPENSIVE_PRODUCT): array
    {

        $sql = "SELECT * FROM product ORDER BY price ASC LIMIT $count";
        $mode = PDO::FETCH_ASSOC;

        $fact = DataBaseService::getInstance();

        return $fact->fetchAll($sql, $mode);
    }

    public static function updateProductQuantity(int $id)
    {
        $db = Db::getConnection();

        $sql = "UPDATE product SET quantity = quantity - 1 WHERE id=". $id;

        $db->prepare($sql)->execute();
    }
}