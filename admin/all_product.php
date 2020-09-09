<?php

include_once "../helpers/guard.php";
include "../helpers/admin_product.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perle product</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

<ul class="products clearfix">
    <?php 

    $list = get_all_product();

    if (!$list) {
        echo "There are no product";
    } else {
        foreach ($list as $product) {
            echo <<<EOD
            <li class="product-wrapper">
                <div class="product">
                <div class="product-photo">
                    <img src="../uploads/$product[photo_src]" alt="">
                </div>
                <p>
                    $product[title]
                </p>
                <div class="buy">
                    <span class="price">$product[price] грн</span>
                    <form action="../helpers/delete_product.php" method="POST">
                    <label for="delete_btn">Удалить:</label>
                        <input type="submit" name="delete_btn" value=$product[id]>
                    </form>
                    </div>
                </div>
            </li>
        </>
        EOD;
        }
    } 
    ?>
    
    </ul>
    <div style="text-align: center;">
        <a href="admin_panel.php">Назад к панели добавления</a>
    </div>
    </body>
</html>
