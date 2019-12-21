<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Admin - WOT: BSFS</title>    
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/new-style.css">
    <link rel="stylesheet" href="../../assets/css/tabs.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body style="visibility: hidden" onload="setTimeout ('document.body.style.visibility = \'visible\'', 0)">
    
    <?php if ( !false ): ?>
    <div class="content-wrapper">
        
        <!-- Шапка -->
        <?php require_once '../../assets/connect/header/index.php'; ?>
        <!-- / Шапка -->
        
        <!-- Меню навигации -->
        <?php require_once '../../assets/connect/nav/index.php'; ?>
        <!-- / Меню навигации -->

        <!-- Здесь начинается контент -->
        <?php if( $_SESSION['UserLogged'] ): ?>
            <?php if( (int)$_SESSION['UserRole'] === 1 ): ?>
                <?php if( $_SESSION['ActivatedAccount'] ): ?>
    <div class="container clearfix">
        <main class="content">

            <!-- for-example -->
            <fieldset class="fieldset_content">
                <legend class="legend_title">панель администратора</legend>
                <!-- Tabs -->
                <div class="tabs">
                    <ul class="tabs__caption">
                        <li class="active">Пользователи</li>
                        <li>keys</li>
                        <li>keys_users</li>
                        <li>roles</li>
                        <li>roles_users</li>
                    </ul>

                    <div class="tabs__content  active">
                        <p>1</p>
                    </div>

                    <div class="tabs__content">
                        <p>2</p>
                    </div>

                    <div class="tabs__content">
                        <p>3</p>
                    </div>

                    <div class="tabs__content">
                        <p>4</p>
                    </div>

                    <div class="tabs__content">
                        <p>5</p>
                    </div>
                </div>
                <!-- / Tabs -->
            </fieldset>
            <fieldset class="fieldset_content">
                <legend class="legend_title">База данных</legend>
                <div class="grid-content">
                    <div class="grid-content__item">
                        <fieldset class="fieldset_content__item">
                            <legend class="legend_title__item" align="center">users</legend>
                            <div style="width: 900px;height: auto;overflow-x: auto;">
                                <table border="1">
                                    <tr>
                                        <th>db_UserId</th>
                                        <th>db_UserNickName</th>
                                        <th>db_UserEmail</th>
                                        <th>db_UserEmailConfirmed</th>
                                        <th>db_UserName</th>
                                        <th>db_GenderUser</th>
                                        <th>db_UserSecretWord</th>
                                        <th>db_UserDateBirth</th>
                                        <th>db_UserDateRegister</th>
                                        <th>db_UserDateVisit</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Noilty</td>
                                        <td>noilty@mail.ru</td>
                                        <td>false</td>
                                        <td>NULL</td>
                                        <td>NULL</td>
                                        <td>NULL</td>
                                        <td>NULL</td>
                                        <td>2019-12-18 18:51:46</td>
                                        <td>2019-12-18 18:51:46</td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="grid-content__item">
                        <fieldset class="fieldset_content__item">
                            <legend class="legend_title__item">keys</legend>
                            <div style="width: 415px;height: auto;overflow-x: auto;">
                                <table border="1">
                                    <tr>
                                        <th>db_KeyId</th>
                                        <th>db_KeyName</th>
                                        <th>db_KeyDescription</th>
                                        <th>db_KeyStatus</th>
                                        <th>db_KeyType</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>AAAA-AAAA-AAAA-AAAA</td>
                                        <td>Активация аккаунта ТЕСТ</td>
                                        <td>1</td>
                                        <td>AccountActivation</td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </div>
                    <div class="grid-content__item">
                        <fieldset class="fieldset_content__item">
                            <legend class="legend_title__item">keys_users</legend>
                            <div style="width: 415px;height: auto;overflow-x: auto;">
                                <table border="1">
                                    <tr>
                                        <th>db_KeyId</th>
                                        <th>db_UserId</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>4</td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="grid-content">
                    <div class="grid-content__item">
                        <fieldset class="fieldset_content__item">
                            <legend class="legend_title__item">roles</legend>
                            <div style="width: 415px;height: auto;overflow-x: auto;">
                                <table border="1">
                                    <tr>
                                        <th>db_RoleId</th>
                                        <th>db_RoleName</th>
                                        <th>db_RoleDescription</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>admin</td>
                                        <td>Главный администратор системы</td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </div>
                    <div class="grid-content__item">
                        <fieldset class="fieldset_content__item">
                            <legend class="legend_title__item">roles_users</legend>
                            <div style="width: 415px;height: auto;overflow-x: auto;">
                                <table border="1">
                                    <tr>
                                        <th>db_RoleId</th>
                                        <th>db_UserId</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
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
                            Активируйте аккаунт!
                        </fieldset>
                    </div>
                </div>
                <?php endif; ?>
            <?php else: ?>
            <div class="grid-content" style="display: block;">
                <div class="grid-content__item">
                    <fieldset class="fieldset_content">
                        <legend class="legend_title">Внимание</legend>
                        Страница доступна только пользователям с ролью администратор!
                    </fieldset>
                </div>
            </div>
            <?php endif; ?>
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
    <?php else: ?>
    <div class="content-wrapper" style="color: #000; text-align: center;">
        Bitch
    </div>
    <?php endif; ?>

    <!-- jQuery mini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- MASK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <!-- / jQuery mini -->
    
    <!-- Tabs -->
    <script src="../../assets/js/tabs.js"></script>
    <!-- / Tabs-->
    
    <script>
        $( document ).ready(function() {
            $("#activation-code").mask("aaaa-aaaa-aaaa-aaaa");
            $('#activation-code').css('text-transform','uppercase');
            $('.grid-content').css('grid-template-columns','1fr 1fr 1fr');
        });// document ready
    </script>    

</body>
    
</html>