<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Profile - WOT: BSFS</title>    
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
        <?php if( $_SESSION['UserLogged'] ): ?>
        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <fieldset class="fieldset_content">
                    <legend class="legend_title">Личное</legend>
                    <div class="grid-content">
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content__item">
                                <legend class="legend_title__item">View</legend>
                                Идентификатор: <strong>#<?= $_SESSION['db_UserId'] ?></strong><br />
                                Никнейм: <strong><?= $_SESSION['db_UserNickName'] ?></strong><br />
                                Роль: <strong><?= $UserRole = ( $_SESSION['UserRole'] ) ? $_SESSION['UserRole'] : 'Обновление...' ?></strong><br />
                                Электронная почта: <strong><?= $_SESSION['db_UserEmail'] ?></strong> <?= $UserEmailConfirmed = ( $_SESSION['db_UserEmailConfirmed'] === 'true' ) ? '<img src="/assets/img/email-ok.png" title="Подтвержденный аккаунт" style="width: 16px;" />' : '<img src="/assets/img/email-no.png" title="Неподтвержденный аккаунт" style="width: 16px;" />' ?><br />
                                <hr />
                                Реальное имя: <strong><?= $UserName = ( $_SESSION['db_UserName'] ) ? $_SESSION['db_UserName'] : 'Пусто' ?></strong><br />
                                Пол: <strong><?= $GenderUser = ( $_SESSION['db_GenderUser'] ) ? $_SESSION['db_GenderUser'] : 'Пусто' ?></strong><br />
                                Секретное слово: <strong><?= $UserSecretWord = ( $_SESSION['db_UserSecretWord'] ) ? $_SESSION['db_UserSecretWord'] : 'Пусто' ?></strong><br />
                                Дата рождения: <strong><?= $UserDateBirth = ( $_SESSION['db_UserDateBirth'] ) ? $_SESSION['db_UserDateBirth'] : 'Пусто' ?></strong>
                                <hr />
                                Дата регистрации: <strong><?= $_SESSION['db_UserDateRegister'] ?></strong><br />
                                Дата последнего посещения: <strong><?= $UserDateVisit = ( $_SESSION['db_UserDateVisit'] ) ? $_SESSION['db_UserDateVisit'] : 'Обновление...' ?></strong><br />
                            </fieldset>
                        </div>
                        <div class="grid-content__item">
                            <form id="form-profile" action="../../assets/connect/core/script/profile.php" method="POST">
                                <fieldset class="fieldset_content__item">
                                    <legend class="legend_title__item" align="center">Setting</legend>
                                    <fieldset>
                                        <legend>Реальное имя</legend>
                                        <input type="text" name="input_UserName" />
                                    </fieldset>
                                    <fieldset>
                                        <legend>Пол</legend>
                                        <select name="select_UserGender">
                                            <option value="male">Мужчина</option>
                                            <option value="female">Женщина</option>
                                        </select>
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
                                        <input type="date" name="input_UserDateBirth" />
                                    </fieldset>
                                    <hr />
                                    <fieldset>
                                        <legend>Проверка на бота</legend>
                                        <img src="../../assets/connect/captcha/captcha.php">
                                        <input type="text" name="input_UserNotBot" />
                                    </fieldset>
                                    <input type="submit" name="input_SettingPersonal" />
                                </fieldset>
                            </form>
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
                    Чтобы продолжить, войдите в аккаунт!
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