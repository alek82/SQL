<?php
/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 25.03.2016
 * Time: 19:26
 */



session_start();

$_SESSION["color"] = $_GET['color'];

header("Location: " . $_SERVER['HTTP_REFERER']);