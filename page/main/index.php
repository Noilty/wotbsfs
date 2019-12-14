<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>WOT: BSFS</title>    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>
<!--
#000000
#212121
#333333
#F2C811
-->
<body>
    
    <div class="content-wrapper">
        
        <!-- Шапка -->
        <?php require_once '../../assets/connect/header/index.php'; ?>
        <!-- / Шапка -->
        
        <!-- Меню навигации -->
        <?php require_once '../../assets/connect/nav/index.php'; ?>
        <!-- / Меню навигации -->
        
        <!-- Здесь начинается контент -->
        <?php if ( !true ): ?>
            <div class="grid-content">
                <!-- INPUT [left] -->
                <div class="grid-content__item">
                    <div class="info-battle">
                        <fieldset>
                            <legend class="legend-head" align="center">Введите урон</legend>
                            <fieldset>
                                <legend>Игрок #1</legend>
                                <input type="text" />
                            </fieldset>
                            <fieldset>
                                <legend>Игрок #2</legend>
                                <input type="text" />
                            </fieldset>
                            <fieldset>
                                <legend>Игрок #3</legend>
                                <input type="text" />
                            </fieldset>
                            <fieldset>
                                <legend>На снится</legend>
                                <label><input type="radio" name="inputBattleResult" value="1" /> Победа!</label><br />
                                <label><input type="radio" name="inputBattleResult" value="0"/> Поражение!</label>
                            </fieldset>
                            <input type="submit" />
                        </fieldset>
                        <div style="text-align: center;">
                            <label><input type="checkbox" id="checkbox" /> Очистить сессию?</label>
                        </div>
                        <div  id="clear-session" class="clear-session">
                            {BLOCK}
                            <input type="submit" value="Очистить"/>
                        </div>
                    </div>                    
                </div>
                <!-- / INPUT [left] -->

                <!-- DB [Center] -->
                <div class="grid-content__item">
                    <div class="info-db">
                        <fieldset>
                            <legend class="legend-head" align="center">База данных</legend>
                            <table border="0">
                                <tr>
                                    <th rowspan="2" style="width: 50px;">Бой</th>
                                    <th colspan="3">Урон за бой</th>
                                    <th rowspan="2" style="width: 115px;">Статус</th>
                                    <th rowspan="2" style="width: 90px;">Действие</th>
                                </tr>
                                <tr>
                                    <th>Игрок #1</th>
                                    <th>Игрок #2</th>
                                    <th>Игрок #3</th>
                                </tr>
                                <tr>
                                    <th rowspan="2" class="battle-fail">1</th>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>ПОРАЖЕНИЕ</td>
                                    <td>Изменить</td>
                                </tr>
                                <tr>
                                    <td colspan="5">INFO</td>
                                </tr>
                                <tr>
                                    <th rowspan="2" class="battle-win">2</th>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>ПОРАЖЕНИЕ</td>
                                    <td>Изменить</td>
                                </tr>
                                <tr>
                                    <td colspan="5">INFO</td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                </div>
                <!-- / DB [Center] -->

                <!-- SOURCE [right] -->
                <div class="grid-content__item">

                    <div class="info-battle">
                        <fieldset>
                            <legend class="legend-head" align="center">Статистика</legend>
                            <div class="grid-statistics">
                                <div class="grid-statistics__item">Боев</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item">Побед</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item">Поражений</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item"><strong>СУ</strong>_Гамер №1</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item"><strong>СУ</strong>_Гамер №2</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item"><strong>СУ</strong>_Гамер №3</div>
                                <div class="grid-statistics__item">99 999</div>
                                <div class="grid-statistics__item">% Побед</div>
                                <div class="grid-statistics__item">99 999</div>
                            </div>                        
                        </fieldset>
                        <fieldset style="text-align: center;">
                            <legend class="legend-head" align="center">Внимание</legend>
                            <div>Доступно обновление!</div>
                            <div>v.2019-10-21(2)</div>                        
                        </fieldset>                    
                    </div>

                </div>
                <!-- / SOURCE [right] -->
            </div>        
        <?php else: ?>
        <div class="grid-content" style="display: block;">
            <div class="grid-content__item"><p style="text-align: center;">Активируйте аккаунт</p></div>
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
    <!-- / jQuery mini -->

    <!-- Скрипт плавного открытия и закрытия блока -->
    <script>
        $('#checkbox').click(function(){
            if ($(this).is(':checked')){
                $('#clear-session').show(100);
            } else {
                $('#clear-session').hide(100);
            }
        });    
    </script>   
    
</body>
    
</html>