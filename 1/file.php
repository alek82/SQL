<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 03.04.16
 * Time: 02:43
 *
 * Написать функцию select($connection, $table, $id = null).  Функция должна делать SELECT запрос в
 * таблицу $table. Если передан необязательный параметр $id то функция должна выбирать одну запись с указанным id.
 *
 */

function connect($database) {
    $linkBase = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($linkBase));
    mysqli_select_db($linkBase, $database) or die('Could not select database');
    return $linkBase;
}

function close($linkBase) {
    // Closing connection
    mysqli_close($linkBase);
}

function Select($linkBase, $sql) {
        $result = mysqli_query($linkBase, $sql) or die('Query failed: ' . mysqli_error($linkBase));
    $data = [];
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = $line;
        }
    mysqli_free_result($result);
    return $data;
}
