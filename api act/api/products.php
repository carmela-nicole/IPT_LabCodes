<?php
$pdo = new PDO('mysql:host=localhost;dbname=information','root','');

$query = 'SELECT * FROM products ';

// if(isset($_GET['name'],$_GET['brand'])){
//     $query .= ' WHERE ';
// }
if(isset($_GET['name'])){
    $query .= 'WHERE name LIKE "%'.$_GET['name'].'%"';
}
// if(isset($_GET['brand'])){
//     $query .= ' name LIKE "%'.$_GET['name'].'%"';
// }
if(isset($_GET['limit'])){
    $query .= ' LIMIT '.$_GET['limit'];
}

$products = $pdo->prepare($query);

$products->execute();

$data = $products->fetchALL(PDO::FETCH_ASSOC);

echo json_encode($data);