<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Setting - WOT: BSFS</title>    
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
        <div style="color: #000; padding: 10px 10px 0px 10px;">
            <fieldset>
                <legend class="legend-head" align="center">Информация</legend>
                <div class="grid-content">
                    <div class="grid-content__item">
                        <div class="info-battle">
                            <fieldset>
                                <legend class="legend-head" title="Browser Source (OBS)" align="center">Источник</legend>
                                Количество Игроков: <strong>Один</strong><br />
                                Количество Элементов: <strong>500</strong><br />
                                <hr />
                                Никнейм Игрок #1: <strong>NaN</strong><br />
                                Никнейм Игрок #2: <strong>NaN</strong><br />
                                Никнейм Игрок #3: <strong>NaN</strong><br />
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid-content__item">
                        <div class="info-db">
                            <fieldset>
                                <legend class="legend-head" align="center">Шаблон</legend>
                                Идентификатор: <strong>#1</strong><br />
                                Имя: <strong>Noilty</strong><br />
                                Ссылка на автора: <strong>vk.com/romakuzmin</strong><br />
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid-content__item">
                        <div class="info-battle">
                            <fieldset>
                                <legend class="legend-head" align="center">Личное</legend>
                                Идентификатор: <strong>#1</strong><br />
                                Никнейм: <strong>Noilty</strong><br />
                                Электронная почта: <strong>thenoilty@gmail.com</strong><br />
                                <hr />
                                Реальное имя: <strong>Рома</strong><br />
                                Секретное слово: <strong>FoMainBitch</strong><br />
                                Дата рождения: <strong>05.04.2019</strong>
                                <hr />
                                Дата регистрации: <strong>05.05.2019</strong><br />
                                Дата последнего посещения: <strong>05.05.2019</strong><br />
                            </fieldset>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        
        <div style="color: #000; padding: 10px 10px 0px 10px;">
            <fieldset>
                <legend class="legend-head" align="center">Настройки</legend>
                <div class="grid-content">
                    <div class="grid-content__item">
                        <div class="info-battle">
                            <form id="formSettingSource" action="" method="POST">
                                <fieldset>
                                    <legend class="legend-head" title="Browser Source (OBS)" align="center">Источник</legend>
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
                                    <fieldset>
                                        <legend>Никнейм</legend>
                                        <fieldset>
                                            <legend>Игрок #1</legend>
                                            <input type="text" name="inputNickNamePlayer1" />
                                        </fieldset>
                                        <fieldset>
                                            <legend>Игрок #2</legend>
                                            <input type="text" name="inputNickNamePlayer2" />
                                        </fieldset>
                                        <fieldset>
                                            <legend>Игрок #3</legend>
                                            <input type="text" name="input_NickNamePlayer3" />
                                        </fieldset>
                                    </fieldset>
                                    <hr />
                                    <fieldset>
                                        <legend>Проверка на бота</legend>
                                        <input type="text" name="input_NotBot" />
                                    </fieldset>
                                    <input type="submit" name="input_SettingSource" />
                                </fieldset>                    
                            </form>                    
                        </div>
                    </div>

                    <div class="grid-content__item">
                        <div class="info-db">
                            <form id="formSettingTemplate" action="" method="POST">
                                <fieldset>
                                    <legend class="legend-head" align="center">Шаблон</legend>
                                    <select name="select_Template">
                                        <option value="0">Noilty</option>
                                        <option value="1">HINCO</option>
                                        <option value="2">GoOgle</option>
                                        <option value="3">HigGA</option>
                                    </select>
                                    <hr />
                                    <fieldset>
                                        <legend>Проверка на бота</legend>
                                        <input type="text" name="input_NotBot" />
                                    </fieldset>
                                    <input type="submit" name="input_SettingSource" />
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="grid-content__item">
                        <div class="info-battle">
                            <form id="formSettingPersonal" action="" method="POST">
                                <fieldset>
                                    <legend class="legend-head" align="center">Личное</legend>
                                    <fieldset>
                                        <legend>Реальное имя</legend>
                                        <input type="text" name="input_UserName" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>Секретное слово</legend>
                                        <input type="text" name="input_UserSecretWord" />
                                        <fieldset>
                                            <legend>Пароль</legend>
                                            <input type="password" name="input_UserPassword" />
                                        </fieldset>
                                    </fieldset>
                                    <fieldset>
                                        <legend>Дата рождения</legend>
                                        <input type="date" name="input_UserName" />
                                    </fieldset>
                                    <hr />
                                    <fieldset>
                                        <legend>Проверка на бота</legend>
                                        <input type="text" name="input_NotBot" />
                                    </fieldset>
                                    <input type="submit" name="input_SettingSource" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>                
            </fieldset>
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
    
    <script>
        $( document ).ready(function() {
            $("#activation-code").mask("aaaa-aaaa-aaaa-aaaa");
            $('#activation-code').css('text-transform','uppercase');
            $('.grid-content').css('grid-template-columns','1fr 1fr 1fr');
        });// document ready
    </script>    

</body>
    
</html>