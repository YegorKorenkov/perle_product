<?php

session_start();

function find_admin($login, $password) {
    if ($login == 'administrationperle' && $password == 'qpalzm102938') {
    return [
        'login' => 'admin'
    ];
} else {
    echo 'error';
}
}

function login($login) {
    $_SESSION['user'] = $login;
}

