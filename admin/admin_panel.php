<?php
include_once "../helpers/guard.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="admin_panel.css">
    <title>Admin panel</title>
</head>
<body>
    <h1>Добавление нового товара</h1>
    <form action="../actions/upload.php" method="POST" enctype="multipart/form-data">

<div class="product_title">
    <label for="title">Описание:</label>
    <input type="text" name="title">
</div>

<div class="product_category">
    <label for="category">Категория:</label>
    
    <select name="category">
        <option value="1">Браслет</option>
        <option value="2">Подвеска</option>
        <option value="3">Кольцо</option>
    </select>
</div>

<div class="product_photo">
    <label for="photo">Фото:</label>
    <input type="file" name="photo">
</div>

<div class="product_price">
    <label for="price">Цена:</label>
    <input type="text" name="price">
</div>

<div>
<input type="submit" class="product_submit">

<a href='all_product.php'>Перейти ко всем товарам</a>

</div>
</form>
</body>
</html>

