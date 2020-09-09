<?php

include_once '../helpers/db.php';

$delete_id = htmlspecialchars($_POST['delete_btn']);

$conn = get_conn_to_db();

$conn->query("delete from products where id = ". $delete_id .";");

header('Location: ../admin/all_product.php');
