<?php

include "../helpers/admin_user.php";

session_start();

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);


$admin = find_admin($login, $password);

if($admin) {
    login($admin['login']);
    header('Location: ../admin/admin_panel.php');
} else {
    echo 'login or password wrong';
    
}
