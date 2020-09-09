<?php

include_once 'db.php';

function get_all_product() {
    $conn = get_conn_to_db();
    $result = $conn  -> query('select id, photo_src, title, price from products;');
    $list = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    mysqli_close($conn);
    return($list);
}