<?php
    require_once "./Cart.php";
    require_once "./Product.php";

    session_start();

    $products = [
        1 => ['id' => 1, 'name' => 'Geladeira', 'price' => 1000, 'quantity' => 1],
        2 => ['id' => 2, 'name' => 'Cama', 'price' => 500, 'quantity' => 1],
        3 => ['id' => 3, 'name' => 'Geladeira', 'price' => 250, 'quantity' => 1]
    ];

    if (isset($_GET['id'])) {
        $id = strip_tags($_GET['id']);
        $productInfo = $products[$id];
        $product = new Product;
        $product->setId($productInfo['id']);
        $product->setName($productInfo['name']);
        $product->setPrice($productInfo['price']);
        $product->setQuantity($productInfo['quantity']);
      
        $cart = new Cart;
        $cart->add($product);
      }
      
      var_dump($_SESSION['cart'] ?? []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./myCart.php">Cart</a>
    <ul>
        <li>Geladeira <a href="?id=1">ADD</a> R$ 1000</li>
        <li>Cama <a href="?id=2">ADD</a> R$ 500</li>
        <li>Mesa <a href="?id=3">ADD</a> R$ 250</li>
    </ul>
</body>
</html>