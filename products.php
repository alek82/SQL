<?php
require 'utils/database.php';
session_start();

define('COLS', 3);

$connection = connect('shop');

$price = isset($_GET['price'])? $_GET['price'] : 0;


$sql = 'SELECT * FROM products WHERE price > ' . $price;

$products = query($sql, $connection);

if (isset($_GET['product'])) {

    if (!file_exists("data/cart.dat")) {
        file_put_contents("data/cart.dat", serialize([]));
    }

    $userProducts = unserialize(file_get_contents("data/cart.dat"));
    $userProducts[] =  $_GET['product'];

    file_put_contents("data/cart.dat", serialize($userProducts));
    header("Location: /products.php");
    die();
}

$userProducts = unserialize(file_get_contents("data/cart.dat"));

$rows = [];
$result = [];
foreach ($products as $key => $value) {
    $row = floor($key / COLS);
    $result[$row][] = $value;
}

/*echo "<pre>";
print_r($result);
die();*/

if (isset($_SESSION['user_logged_in']) && 1 == $_SESSION['user_logged_in']) {
    include "view/products.phtml";
}  else  {
    include "view/denied.phtml";
}

close($connection);