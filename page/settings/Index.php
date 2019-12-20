<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Setting - WOT: BSFS</title>    
    <link rel="stylesheet" href="../../css/normalize.css">
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
        <?php if( $_SESSION['UserLogged'] ): ?>
        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <fieldset class="fieldset_content">
                    <legend class="legend_title">View</legend>
                    <div class="grid-content">
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">Источник</legend>
                                Количество Игроков: <strong>Один</strong><br />
                                Количество Элементов: <strong>500</strong><br />
                                <hr />
                                Никнейм Игрок #1: <strong>NaN</strong><br />
                                Никнейм Игрок #2: <strong>NaN</strong><br />
                                Никнейм Игрок #3: <strong>NaN</strong><br />
                            </fieldset>
                        </div>
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">Шаблон</legend>
                                Идентификатор: <strong>#1</strong><br />
                                Автор: <strong>Noilty</strong><br />
                                Ссылка на автора: <strong>vk.com/romakuzmin</strong>
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="fieldset_content">
                    <legend class="legend_title">Setting</legend>
                    <div class="grid-content">
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">Источник</legend>
                                <fieldset>
                                    <legend>Количество</legend>
                                    <fieldset>
                                        <legend>Игроков</legend>
                                        <select name="select_CountPlayer">
                                            <option value="1">Один</option>
                                            <option value="2">Два</option>
                                            <option value="3">Три</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Элементов</legend>
                                        <select name="select_CountElement">
                                            <option value="500">500</option>
                                            <option value="250">250</option>
                                            <option value="100">100</option>
                                            <option value="50">50</option>
                                        </select>
                                    </fieldset>
                                </fieldset>
                                <br />
                                <fieldset>
                                    <legend>Никнейм</legend>
                                    <fieldset>
                                        <legend>Игрок #1</legend>
                                        <input type="text" name="input_NickNamePlayer1" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>Игрок #2</legend>
                                        <input type="text" name="input_NickNamePlayer2" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>Игрок #3</legend>
                                        <input type="text" name="input_NickNamePlayer3" />
                                    </fieldset>
                                </fieldset>
                                <hr />
                                <fieldset>
                                    <legend>Проверка на бота</legend>
                                    <img src="../../assets/connect/captcha/captcha.php">
                                    <input type="text" name="input_UserNotBot" />
                                </fieldset>
                                <input type="submit" name="input_SettingSource" />
                            </fieldset>
                        </div>
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">Шаблон</legend>
                                <select name="select_Template">
                                    <option value="0">Noilty</option>
                                    <option value="1">HINCO</option>
                                    <option value="2">GoOgle</option>
                                    <option value="3">HigGA</option>
                                </select>
                                <hr />
                                <fieldset>
                                    <legend>Проверка на бота</legend>
                                    <img src="../../assets/connect/captcha/captcha.php">
                                    <input type="text" name="input_UserNotBot" />
                                </fieldset>
                                <input type="submit" name="input_SettingTemplate" />
                            </fieldset>
                        </div>
                    </div>
                </fieldset>
            </main>
        </div>
        <?php else: ?>
        <div class="grid-content" style="display: block;">
            <div class="grid-content__item"><p style="text-align: center;">Чтобы продолжить, войдите в аккаунт!</p></div>
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
    
    <script>
        $( document ).ready(function() {
            $("#activation-code").mask("aaaa-aaaa-aaaa-aaaa");
            $('#activation-code').css('text-transform','uppercase');
        });// document ready
    </script>    

</body>
    
</html>