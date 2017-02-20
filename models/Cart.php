<?php

class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        // Пустой массив для товаров в корзине
        $productInCart = array();

        //Eсли в корзине уже есть товары (они хранятся в сессии)
          if (isset($_SESSION['products'])) {
              // То заполним наш масси товарами
              $productInCart = $_SESSION['products'];
          }
        //Если товар есть в корзинеб но был добавлен еще раз увеличим к-ство
        if (array_key_exists($id, $productInCart)) {
            $productInCart[$id]++;
        } else {
            //добавление нового товара в корзину
            $productInCart[$id]=1;
        }

        $_SESSION['products'] = $productInCart;

        return self::countItems();

    }

    /**
     * Подсчет количества товаров в корзине (сесии)
     * @return int
     */
    public static function countItems()
    {
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as  $id => $quantity){
                $count += $quantity;
            }
        return $count;
    }else {
            return 0;
        }

    }

    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;

        if ($productsInCart) {
            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }
}