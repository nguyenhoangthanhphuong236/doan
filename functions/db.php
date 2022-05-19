<?php
include_once './functions/mysql.php';

function getAllProducts() {
    $sql = "select * from products";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}
