<?php
/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 23.03.2016
 * Time: 20:03
 */
session_start();
unset($_SESSION['user_logged_in']);

header("Location: /index.php");