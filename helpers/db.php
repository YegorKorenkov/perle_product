<?php

function get_conn_to_server() {
    return new mysqli('localhost', 'm965901i_perle', 'Perleqwer1234');
};

function get_conn_to_db() {
    return new mysqli('localhost', 'm965901i_perle', 'Perleqwer1234', 'm965901i_perle');
}

// $host = 'localhost';
// $db   = 'm965901i_perle';
// $user = 'root';
// $pass = 'Perleqwer1234';
// $charset = 'utf8mb4';


// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// try {
//     $mysqli = mysqli_connect($host, $user, $pass, $db);
//     mysqli_set_charset($mysqli, $charset);
// } catch (\mysqli_sql_exception $e) {
//      throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
// }
// unset($host, $db, $user, $pass, $charset);