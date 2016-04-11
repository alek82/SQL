<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 10.04.16
 * Time: 20:32
 */
echo 'Написать функцию select($connection, $table, $id = null).  Функция должна делать <br>';
echo 'SELECT запрос в таблицу $table. Если передан необязательный параметр $id то функция должна <br>';
echo 'выбирать одну запись с указанным id. <br<br>';

require 'file.php';
$id = 2;
$table = 'products';
if (isset($id)) {
    $myResult = Select(connect('MyBase'), 'SELECT * FROM ' . $table . ' where id=' . $id);
} else {
    $myResult = Select(connect('MyBase'), 'SELECT * FROM ' . $table);
}
close(connect('MyBase'));
echo '<pre>';
print_r ($myResult);
echo '</pre>';