<?php
include_once './functions/mysql.php';

function getAllProducts() {
    $sql = "select * from products";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}

function getProduct($id) {
    $sql = "select * from products where id=? LIMIT 1";
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    return $stmt->fetch();
}

function getProductsByCategory($categoryId){
    $sql = "select * from products where categories=$categoryId";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}

function getProductsByName($name){
    $sql = "select * from products where name like '%" . $name ."%'";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute();

    return $query;
}
