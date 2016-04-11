<?php
session_start();
if (!empty($_POST)) {

    $data = file_get_contents("data/user.dat");
    $user = unserialize($data);

    if ($user['user_login'] == $_POST['user_login'] && $user['user_password'] == $_POST['user_password'] ) {
        $_SESSION["user_logged_in"] = 1;
        $_SESSION["user_login"]     = $_POST['user_login'];

        header("Location: /products.php");
        die();

    }   else  {
        echo "Wrong password";
    }


}

include "view/index.phtml";

