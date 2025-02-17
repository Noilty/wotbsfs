<?php
require_once '../../assets/require-one.php';
?>
<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>WOT: BSFS</title>    
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/new-style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>
<!--
#000000
#212121
#333333
#F2C811
-->
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
            <?php if ( $_SESSION['ActivatedAccount'] ): ?><div class="block-content"></div>
            <div class="container clearfix">
                <main class="content">
                    <!-- for-example -->
                    <div class="grid-content">
                        <div class="grid-content__item">
                            <fieldset class="fieldset_content">
                                <legend class="legend_title" align="center">База данных</legend>
                                <table border="1">
                                    <tr>
                                        <th rowspan="2" style="width: 50px;">Бой</th>
                                        <th colspan="3">Урон за бой</th>
                                        <th rowspan="2" style="width: 115px;">Статус</th>
                                        <th rowspan="2" style="width: 90px;">Действие</th>
                                    </tr>
                                    <tr>
                                        <th><?= $row_TableDB__settings[0]['db_NickNamePlayer1'] ?></th>
                                        <th><?= $row_TableDB__settings[0]['db_NickNamePlayer2'] ?></th>
                                        <th><?= $row_TableDB__settings[0]['db_NickNamePlayer3'] ?></th>
                                    </tr>
                                    <?php $iNumBattles = count($row_TableDB__resultbattles); ?>
                                    <?php foreach ($row_TableDB__resultbattles as $key => $value): ?>
                                    <?php $mIsWinLose = isWinLose($value['db_BattleResult']); ?>
                                    <tr>
                                        <th rowspan="2" class="<?= $mIsWinLose[1]; ?>"><?= $iNumBattles--; ?></th>
                                        <td><?= $value['db_DamageOnePlayer']; ?></td>
                                        <td><?= $value['db_DamageTwoPlayer']; ?></td>
                                        <td><?= $value['db_DamageThreePlayer']; ?></td>
                                        <td><?= $mIsWinLose[0]; ?></td>
                                        <td> <i style="color: red;">Изменить</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><i style="color: red;">Подробнее</i></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </fieldset>
                        </div>
                    </div>
                </main>
                <aside class="sidebar sidebar__left">
                    <form id="form-main" action="../../assets/connect/core/script/main.php" method="POST">
                        <fieldset class="fieldset_content">
                            <legend class="legend_title" align="center">Введите урон</legend>
                            <fieldset>
                                <legend><?= $row_TableDB__settings[0]['db_NickNamePlayer1'] ?></legend>
                                <input type="text" name="input_DamagePlayer1" />
                            </fieldset>
                            <fieldset>
                                <legend><?= $row_TableDB__settings[0]['db_NickNamePlayer2'] ?></legend>
                                <input type="text" name="input_DamagePlayer2" />
                            </fieldset>
                            <fieldset>
                                <legend><?= $row_TableDB__settings[0]['db_NickNamePlayer3'] ?></legend>
                                <input type="text" name="input_DamagePlayer3" />
                            </fieldset>
                            <fieldset>
                                <legend>На снится</legend>
                                <label><input type="radio" name="input_BattleResult" value="1" /> Победа!</label><br />
                                <label><input type="radio" name="input_BattleResult" value="0" /> Поражение!</label>
                            </fieldset>
                            <input type="submit" />
                        </fieldset>
                    </form>
                    <div style="margin: 10px 0px 10px 20px;">
                        <div style="text-align: center; padding: 0px 0px 10px 0px;">
                            <label><input type="checkbox" id="checkbox" /> Очистить сессию?</label>
                        </div>
                        <div  id="clear-session" class="clear-session">
                            {BLOCK}
                            <input type="submit" value="Очистить"/>
                        </div>
                    </div>
                </aside>
                <aside class="sidebar sidebar__right">
                    <fieldset class="fieldset_content">
                        <legend class="legend_title" align="center">Статистика</legend>
                        <div class="grid-statistics">
                            <div class="grid-statistics__item">Боев</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">Побед</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">Поражений</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item"><strong>СУ</strong>_<?= $row_TableDB__settings[0]['db_NickNamePlayer1'] ?></div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item"><strong>СУ</strong>_<?= $row_TableDB__settings[0]['db_NickNamePlayer2'] ?></div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item"><strong>СУ</strong>_<?= $row_TableDB__settings[0]['db_NickNamePlayer3'] ?></div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">% Побед</div>
                            <div class="grid-statistics__item">99 999</div>
                        </div>                        
                    </fieldset>
                </aside>
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

    <!-- Скрипт плавного открытия и закрытия блока -->
    
    <script>
        $( document ).ready(function() {
            $('#checkbox').click(function(){
                if ($(this).is(':checked')){
                    $('#clear-session').show(100);
                } else {
                    $('#clear-session').hide(100);
                }
            });
            $('.fieldset_content').css('margin','15px 0px 0px 20px');
            $('.grid-content').css({'grid-template-columns':'2fr','padding':'0px 20px 0px 0px'});
        });// document ready
    </script>  
    
</body>
    
</html>