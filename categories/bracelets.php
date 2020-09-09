<?php

include '../helpers/product.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perle product</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../magnific-popup/magnific-popup.css">
    <link rel="shortcut icon" href="images/icon.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <span id="top-logo">PERLE</span>
        <span id="bot-logo">PRODUCT</span>
    </header>
    
    <ul class="categories">
        <li class="category-wrapper">
            <a href="/" class="category">Все товары</a>
        </li>
        <li class="category-wrapper">
            <a href="bracelets.php" class="category" href="#">Браслеты</a>
        </li>
        <li class="category-wrapper">
            <a href="chains.php" class="category">Подвески</a>
        </li>
        <li class="category-wrapper">
            <a href="rings.php" class="category">Кольца</a>
        </li>
    </ul>

    <h1>Наша продукция:</h1>

    <ul class="products clearfix">
    <?php 

    $list = get_all_bracelets();

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
                    <a href="#form" class="popup buy-button">Купить</a>
                    </div>
                </div>
            </li>
        </>
        EOD;
        }
    } 
    ?>
    </ul>

    <div class="hidden">
        <form id="form" action="../mail.php" method="post">
            <p>Ваше Имя: <input type="text" name="name" placeholder="" required></p>
            <p>Ваша Фамилия: <input type="text" name="surname" placeholder="" required></p>
            <p>Ваш телефон: <input type="text" name="phone" id="phone" placeholder="" required></p>
            <p>Адрес доставки: <input type="text" name="address" placeholder=""></p>
            <input type="hidden" name="product_name" id="product_name">
            <p><button class="order">Заказать</button></p>
        </form>
    </div>

        <footer class="footer-container">
            <ul class="app-block">
                <li>
                    <a>
                        <img src="../images/instagram.svg">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="../images/telegram.svg">
                    </a>
                </li>
                <li>
                    <a>
                        <img src="../images/viber.svg">
                    </a>
                </li>
            </ul>
        </footer>
    <script src="../magnific-popup/jquery.min.js"></script>
    <script src="../magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../js/common.js"></script>
    <script src="../vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
</body>
</html>