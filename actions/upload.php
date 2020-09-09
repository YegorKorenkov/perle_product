<?php

include_once '../helpers/db.php';
include '../helpers/guard.php';

$title = htmlspecialchars($_POST['title']);
$category = htmlspecialchars($_POST['category']);
$price = htmlspecialchars($_POST['price']);

$generated_file_name = rand(0, 9999) . basename($_FILES['photo']['name']);
$target_path = '../uploads/' . $generated_file_name;

$conn = get_conn_to_db();

if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
    $statement = $conn -> prepare('insert into products(photo_src, title, price, category_id) values (?, ?, ?, ?);');
    $statement -> bind_param("sssi", $target_path, $title, $price, $category);
    $statement -> execute();
    $statement -> close();

    echo "File was uploaded " . "<a href='../admin/admin_panel.php'>go to panel</a>";
} else {
    echo "Error while uploading photo";
}