<?php

include_once 'db.php';

function get_all_product() {
    $conn = get_conn_to_db();
    $result = $conn  -> query('select photo_src, title, price from products;');
    $list = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return($list);
}

function get_all_bracelets() {
    $conn = get_conn_to_db();
    $result = $conn  -> query('select photo_src, title, price from products where category_id = 1;');
    $list = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return($list);
}

function get_all_chains() {
    $conn = get_conn_to_db();
    $result = $conn  -> query('select photo_src, title, price from products where category_id = 2;');
    $list = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return($list);
}

function get_all_rings() {
    $conn = get_conn_to_db();
    $result = $conn  -> query('select photo_src, title, price from products where category_id = 3;');
    $list = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return($list);
}