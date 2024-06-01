<?php 
    require "./Product.php";
    require "./Cart.php";
    session_start();
    
    $cart = new Cart;
    $producstsInCart = $cart->getCart();

    if(isset($_GET['id'])){
        $cart->remove(strip_tags($_GET['id']));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($cart->getTotal() == 0): ?>
        <p>Nao exite produtos no carrinho</p>
    <?php else: ?>

    <ul>
        <?php foreach($producstsInCart as $product): ?>
            <li>
                <?php echo $product->getName() ?>
                <input type="text" value="<?php echo $product->getQuantity() ?>">
                <p>Price: R$<?php echo   number_format($product->getPrice(), 2, ',', '.')?></p>
                <p>Total: <?php echo  number_format($product->getPrice() * $product->getQuantity(), 2, ',', '.')  ?></p>
                <a href="?id=<?php echo $product->getId() ?>">Remover</a>
            </li>

            <p>Total: <?php echo $cart->getTotal()?></p>
        <?php endforeach; ?>
    </ul>

    <?php endif; ?>
</body>
</html>