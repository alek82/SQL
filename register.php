<?php
session_start();
/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 23.03.2016
 * Time: 19:20
 */

if (!empty($_POST)) {
    $serializedData = serialize($_POST);
    file_put_contents('data/user.dat', $serializedData);
    header("Location: /index.php");
    die();

}

include "view/register.phtml";