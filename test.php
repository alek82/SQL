<?php

require 'utils/database.php';

$connection = connect('MyBase');
$products = query('SELECT * FROM products', $connection);
close($connection);
print_r ($products);