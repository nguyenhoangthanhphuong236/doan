<?php include_once './functions/db.php'; ?>

<?php

    if(!isset($_GET['id'])) die();
    $product = getProduct($_GET['id']);
    order($product['id'], $product['name'], $product['image'], $product['price'], 1);

    redirect("cart.php");
?>