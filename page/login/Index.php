<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Log In - WOT: BSFS</title>
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/new-style.css">
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
        <?php if( !$_SESSION['UserLogged'] ): ?>
        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <fieldset class="fieldset_content">
                    <legend class="legend_title">Вход</legend>
                    <div class="grid-content">
                        <div class="grid-content__item">
                            <form id="form-login" action="../../assets/connect/core/script/auth.php" method="POST">
                                <fieldset class="fieldset_content__item">
                                    <legend class="legend_title__item" align="center">Начните вводить данные для входа</legend>
                                    <fieldset>
                                        <legend>Электронная почта</legend>
                                        <input type="email" name="input_UserEmail" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>Пароль</legend>
                                        <input type="password" name="input_UserPassword" />
                                    </fieldset>
                                    <hr />
                                    <fieldset>
                                        <legend>Проверка на бота</legend>
                                        <img src="../../assets/connect/captcha/captcha.php">
                                        <input type="text" name="input_UserNotBot" />
                                    </fieldset>
                                    <input type="submit" name="submit_Login" />
                                </fieldset>                    
                            </form>
                            <a href="/page/signup/" style="color: #000; text-align: center;">Нет аккаунта?</a>
                        </div>
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">При заполнении формы учтите данные аспекты</legend>
                                {CONTENT}
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </main>
        </div>
        <?php else: ?>
        <div class="grid-content" style="display: block;">
            <div class="grid-content__item">
                <fieldset class="fieldset_content">
                    <legend class="legend_title">Внимание</legend>
                    Что-то пошло не так! (/login/)
                </fieldset>
            </div>
        </div>
        <?php endif; ?>
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