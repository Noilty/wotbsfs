<?php
require_once '../../assets/require-one.php';
require_once '../../assets/connect/core/script/admin.php';
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
                                    <li>Ключи</li>
                                    <li>Роли</li>
                                    <li>Шаблоны Источника</li>
                                    <li>Обновление</li>
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
                                        <div class="users-table">
                                            <table border="1">
                                                <tr>
                                                    <th>ИД</th>
                                                    <th>Никнейм</th>
                                                    <th>Почта</th>
                                                    <th>Статус почты</th>
                                                    <th>Реальное имя</th>
                                                    <th>Пол</th>
                                                    <th>Секретное слово</th>
                                                    <th>Дата рождения</th>
                                                    <th>Дата регистрации</th>
                                                    <th>Дата последнего посещения</th>
                                                </tr>
                                                <?php foreach ($mAllUsers as $keyUser => $valueUser): ?>
                                                <tr>
                                                    <td><?= $valueUser['db_UserId'] ?></td>
                                                    <td><?= $valueUser['db_UserNickName'] ?></td>
                                                    <td><?= $valueUser['db_UserEmail'] ?></td>
                                                    <td><?= ( (int)$valueUser['db_UserEmailConfirmed'] ) ? '<img src="/assets/img/email-ok.png" title="Электронная почта подтверждена" style="width: 16px;" />' : '<img src="/assets/img/email-no.png" title="Электронная почта не подтверждена" style="width: 16px;" />' ?></td>
                                                    <td><?= ( $valueUser['db_UserName'] ) ? $valueUser['db_UserName'] : 'Пусто' ?></td>
                                                    <td><?= ( (int)$valueUser['db_UserGender'] ) ? GenderCheck($valueUser['db_UserGender']) : 'Пусто' ?></td>
                                                    <td><?= ( $valueUser['db_UserSecretWord'] ) ? $valueUser['db_UserSecretWord'] : 'Пусто' ?></td>
                                                    <td><?= ( $valueUser['db_UserDateBirth'] ) ? $valueUser['db_UserDateBirth'] : 'Пусто' ?></td>
                                                    <td><?= $valueUser['db_UserDateRegister'] ?></td>
                                                    <td><?= ( $valueUser['db_UserDateVisit'] ) ? $valueUser['db_UserDateVisit'] : 'Пусто' ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="grid-content">
                                <div class="grid-content__item">
                                    <fieldset class="fieldset_content__item">
                                        <legend class="legend_title__item">keys</legend>
                                        <div class="keys-table">
                                            <table border="1">
                                                <tr>
                                                    <th>ИД</th>
                                                    <th>Ключ</th>
                                                    <th>Описание</th>
                                                    <th>Тип</th>
                                                    <th>Статус</th>
                                                </tr>
                                                <?php foreach ($mAllKeys as $keyKey => $valueKey): ?>
                                                <tr>
                                                    <td><?= $valueKey['db_KeyId'] ?></td>
                                                    <td><?= $valueKey['db_KeyName'] ?></td>
                                                    <td><?= $valueKey['db_KeyDescription'] ?></td>
                                                    <td><?= $valueKey['db_KeyType'] ?></td>
                                                    <td><?= ( $valueKey['db_KeyStatus'] == 1 ) ? 'Активирован' : 'Свободен' ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="grid-content__item">
                                    <fieldset class="fieldset_content__item">
                                        <legend class="legend_title__item">keys_users</legend>
                                        <div class="keys_users-table">
                                            <table border="1">
                                                <tr>
                                                    <th>ИД</th>
                                                    <th>ИД пользователя</th>
                                                    <th>Дата активации</th>
                                                </tr>
                                                <?php foreach ($mAllKeysActivated as $keyKeyActivated => $valueKeyActivated): ?>
                                                <tr>
                                                    <td><?= $valueKeyActivated['db_KeyId'] ?></td>
                                                    <td><?= $valueKeyActivated['db_UserId'] ?></td>
                                                    <td><?= $valueKeyActivated['db_KeyActivationDate'] ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="grid-content">
                                <div class="grid-content__item">
                                    <fieldset class="fieldset_content__item">
                                        <legend class="legend_title__item">roles</legend>
                                        <div class="roles-table">
                                            <table border="1">
                                                <tr>
                                                    <th>ИД</th>
                                                    <th>Роль</th>
                                                    <th>Описание</th>
                                                </tr>
                                                <?php foreach ($mAllRoles as $keyRole => $valueRole): ?>
                                                <tr>
                                                    <td><?= $valueRole['db_RoleId'] ?></td>
                                                    <td><?= $valueRole['db_RoleName'] ?></td>
                                                    <td><?= $valueRole['db_RoleDescription'] ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="grid-content__item">
                                    <fieldset class="fieldset_content__item">
                                        <legend class="legend_title__item">roles_users</legend>
                                        <div class="roles_users-table">
                                            <table border="1">
                                                <tr>
                                                    <th>ИД роли</th>
                                                    <th>ИД пользователя</th>
                                                </tr>
                                                <?php foreach ($mAllRolesUsers as $keyRoleUser => $valueRoleUser): ?>
                                                <tr>
                                                    <td><?= $valueRoleUser['db_RoleId'] ?></td>
                                                    <td><?= $valueRoleUser['db_UserId'] ?></td>
                                                </tr>
                                                <?php endforeach; ?>
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