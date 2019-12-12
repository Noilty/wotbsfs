<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>WOT: BSFS</title>    
    <link rel="stylesheet" href="css/style.css">
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
        <header class="grid-header">
            <div class="grid-header__item">World Of Tanks: Battle Statistics For Stream</div>
        </header>
        <!-- / Шапка -->
        
        <!-- Меню навигации -->
        <nav class="grid-nav">
            <!-- Левая часть меню -->
            <div class="grid-nav__item">
                <ul>
                    <a href="#">
                        <li>Главная</li>
                    </a>
                    <a href="#" title="Browser Source (OBS)" target="_blank">
                        <li>Источник</li>
                    </a>
                    <li>
                        Центр поддержки
                        <ul>
                            <a href="#">
                                <li>Мои заявки</li>
                            </a>
                            <a href="#">
                                <li>Мои баны</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- / Левая часть меню -->
            
            <!-- Правая часть меню -->
            <div class="grid-nav__item">
                <ul>
                    <li>
                        С возвращением <strong>Noilty</strong>!
                        <ul>
                            <a href="#">
                                <li>Активировать код</li>
                            </a>
                            <a href="#">
                                <li>Настройки</li>
                            </a>
                            <a href="#">
                                <li>Выход</li>
                            </a>
                        </ul>
                    </li>                        
                </ul>
            </div>
            <!-- / Правая часть меню -->            
        </nav>
        <!-- / Меню навигации -->
        
        <!-- Здесь начинается контент -->
        <div class="grid-content">
            <!-- INPUT [left] -->
            <div class="grid-content__item">
                <div class="info-battle">
                    <fieldset>
                        <legend align="center" style="text-transform: uppercase;">Введите урон</legend>
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
                    <div class="clear-session" id="text">{BLOCK}</div>
                </div>                    
            </div>
            <!-- / INPUT [left] -->

            <!-- DB [Center] -->
            <div class="grid-content__item">
                <div class="info-battle">
                    <fieldset>
                        <legend align="center" style="text-transform: uppercase;">База данных</legend>
                        <table border="0">
                            <tr>
                                <th rowspan="2">Бой</th>
                                <th colspan="3">Урон за бой</th>
                                <th rowspan="2">Статус</th>
                                <th rowspan="2">Действие</th>
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
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td colspan="5">INFO</td>
                            </tr>
                            <tr>
                                <th rowspan="2" class="battle-win">2</th>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
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
                        <legend align="center" style="text-transform: uppercase;">Статистика</legend>
                        <div class="grid-statistics">
                            <div class="grid-statistics__item">Боев</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">Побед</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">Поражений</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">С/У Гамер №1</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">С/У Гамер №2</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">С/У Гамер №3</div>
                            <div class="grid-statistics__item">99 999</div>
                            <div class="grid-statistics__item">% Побед</div>
                            <div class="grid-statistics__item">99 999</div>
                        </div>                        
                    </fieldset>
                    <fieldset style="text-align: center;">
                        <legend align="center" style="text-transform: uppercase;">Внимание</legend>
                        <div>Доступно обновление!</div>
                        <div>v.2019-10-21(2)</div>                        
                    </fieldset>                    
                </div>
                
            </div>
            <!-- / SOURCE [right] -->
        </div>
        <!-- / Здесь начинается контент -->
        
        <!-- Подвал -->
        <footer>
            {FOOTER}
        </footer>
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
                $('#text').show(100);
            } else {
                $('#text').hide(100);
            }
        });    
    </script>   
    
</body>
    
</html>