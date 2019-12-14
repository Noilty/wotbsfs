<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Setting - WOT: BSFS</title>    
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
</head>

<body>
    
    <div class="content-wrapper">
        
        <!-- Шапка -->
        <?php require_once '../../assets/connect/header/index.php'; ?>
        <!-- / Шапка -->
        
        <!-- Меню навигации -->
        <?php require_once '../../assets/connect/nav/index.php'; ?>
        <!-- / Меню навигации -->

        <!-- Здесь начинается контент -->
        <div class="grid-content">
            <div class="grid-content__item">
                <div class="info-battle">
                    <form action="" method="POST">
                         <fieldset>
                             <legend class="legend-head" title="Browser Source (OBS)" align="center">Источник</legend>
                             <fieldset>
                                 <legend>Количество</legend>
                                 <fieldset>
                                     <legend>Игроков</legend>
                                     <select name="selectCountPlayers">
                                         <option value="1">Один</option>
                                         <option value="2">Два</option>
                                         <option value="3">Три</option>
                                     </select>
                                 </fieldset>
                                 <fieldset>
                                     <legend>Элементов</legend>
                                     <select name="selectCountElements">
                                         <option value="500">500</option>
                                         <option value="250">250</option>
                                         <option value="100">100</option>
                                         <option value="50">50</option>
                                     </select>
                                 </fieldset>
                             </fieldset>
                             <fieldset>
                                 <legend>Шаблон</legend>
                                 <select name="selectTemplate">
                                     <option value="0">Noilty</option>
                                     <option value="1">HINCO</option>
                                     <option value="2">GoOgle</option>
                                     <option value="3">HigGA</option>
                                 </select>
                             </fieldset>
                             <hr />
                             <fieldset>
                                 <legend>Проверка на бота</legend>
                                 <input type="text" name="inputNotBot" />
                             </fieldset>
                             <input type="submit" name="inputSettingSource" />
                         </fieldset>                    
                     </form>                    
                </div>
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
    
    <script>
        $( document ).ready(function() {
            $("#activation-code").mask("aaaa-aaaa-aaaa-aaaa");
            $('#activation-code').css('text-transform','uppercase');
        });// document ready
    </script>    

</body>
    
</html>