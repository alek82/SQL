<?php
/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 01.04.2016
 * Time: 20:33
 */

function connect($database) {
    // Connect to database server
    $link = mysqli_connect('localhost', 'root', '') or die('Could not connect: ' . mysqli_error($link));
    // Select database
    mysqli_select_db($link, $database) or die('Could not select database');
    return $link;
}

function close($link) {
    // Closing connection
    mysqli_close($link);
}

function query($sql, $link) {
    $result = mysqli_query($link, $sql) or die('Query failed: ' . mysqli_error($link));
    $data = [];
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $line;
    }
    mysqli_free_result($result);
    return $data;
}