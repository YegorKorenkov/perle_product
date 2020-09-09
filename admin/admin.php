<?php

//include ("helpers/db.php");
$echo = " <div class='table'>
    <div class='table-wrapper'>
        <div class='table-title'>Войти в панель администратора</div>
            <div class='table-content'> 
                <form action='../actions/login.php' method='post' id='login-form' class='login-form'>
                        <input type='text' placeholder='Логин' class='input'
                            name='login' required><br>
                        <input type='password' placeholder='Пароль' class='input'
                            name='password' required><br>
                        <input type='submit' value='Войти' class='button'>
                </form>
            </div>
        </div>
    </div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' href="admin_panel.css">
    <title>Admin page</title>
</head>
<body>

    <div class="wrapper">
        <main class="main" id="main">
            <?php echo ($echo); ?>

        </main>

    </div>

</body>
</html>