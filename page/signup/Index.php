<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Sign Up - WOT: BSFS</title>    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body style="visibility: hidden" onload="setTimeout ('document.body.style.visibility = \'visible\'', 0)">
    
    <div class="content-wrapper">
        
        <!-- Шапка -->
        <?php require_once '../../assets/connect/header/index.php'; ?>
        <!-- / Шапка -->
        
        <!-- Меню навигации -->
        <?php require_once '../../assets/connect/nav/index.php'; ?>
        <!-- / Меню навигации -->

        <!-- Здесь начинается контент -->
        <div id="form-signup" class="grid-content" style="display: block;" align="center">
            <div style="padding: 15px 450px 15px 450px;">
                <form action="../../assets/connect/core/script/reg.php" method="POST">
                    <fieldset>
                        <legend class="legend-head" align="center">Регистрация</legend>
                        <fieldset>
                            <legend>Логин</legend>
                            <input type="text" name="input_UserNickName" />
                        </fieldset>
                        <fieldset>
                            <legend>Пароль</legend>
                            <input type="password" name="input_UserPassword" />
                        </fieldset>
                        <fieldset>
                            <legend>Повторите пароль</legend>
                            <input type="password" name="input_UserPasswordRe" />
                        </fieldset>
                        <fieldset>
                            <legend>Электронная почта</legend>
                            <input type="email" name="input_UserEmail" />
                        </fieldset>
                        <hr />
                        <fieldset>
                            <legend>Проверка на бота</legend>
                            <img src="../../assets/connect/captcha/captcha.php">
                            <input type="text" name="input_UserNotBot" />
                        </fieldset>
                        <input type="submit" name="submit_Signup" />
                    </fieldset>                    
                </form>
                <a href="/page/login/" style="color: #000;">Есть аккаунт?</a>
            </div>
        </div>
        <!-- / Здесь начинается контент -->
        
        <!-- Подвал -->
        <?php require_once '../../assets/connect/footer/index.php'; ?>
        <!-- / Подвал -->

    </div>

    <!-- jQuery mini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
    <!-- MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <!-- / jQuery mini --> 
    
</body>
    
</html>