<?php

include_once ('./classes/JsonConvertible.php');
include_once ('./classes/PriceTrait.php');
include_once ('./classes/Product.php');
include_once ('./classes/Promotion.php');
include_once ('./classes/Cart.php');
include_once ('./classes/Database.php');

$gameProductList = [];
include_once ('./datas/products.php');

$db = new Database();

$cart = new Cart();

$products = [];
foreach ($gameProductList as $game) {
    $products[] = new Product(
        $game['id'],
        $game['name'],
        $game['description'],
        $game['platform'],
        $game['genres'],
        $game['releasedAt'],
        $game['image'],
        $game['price'],
    );
}

$cart->setProducts($products);

$db->save($cart);

$loadedCart = $db->load('Cart');

var_dump($loadedCart);

