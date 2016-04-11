<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 10.04.16
 * Time: 20:29
 */
echo 'Написать функцию insert($connection, $table, $data). Функция должна добавлять в <br>';
echo 'таблицу $table новую запись с данными из массива $data где ключ массива это поле <br>';
echo '(колонка) а значение массива это сама запись. <br><br>';

require 'file.php';
$table = 'products';
$data = array("id" => "10", "Name" => "uuu", "price" => "323");
//foreach ($data as $key=>$String) {
    $Res = "INSERT INTO $table VALUES ($key, $String, '')";
    Insert(connect('MyBase'), $Res);
//}
$myResult = Select(connect('MyBase'), 'SELECT * FROM ' . $table);
close(connect('MyBase'));
echo '<pre>';
print_r ($myResult);
echo '</pre>';

// INSERT INTO `products` (`id`, `Name`, `price`)
// VALUES ('6', 'yyy', '176');

/*mysql_select_db ( $db ) or die ("Невозможно открыть $db");
$query = "INSERT INTO books
          VALUES ('966-7393-80-1', 'Аллен Вайк',
          'PHP. Справочник', '213', '4')";
mysql_query ( $query );
*/