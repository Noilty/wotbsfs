<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Activation - WOT: BSFS</title>    
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
        <div id="form-activation" class="grid-content" style="display: block;" align="center">
            <div style="padding: 20px 450px 20px 450px;">
                <form action="" method="POST">
                    <fieldset>
                        <legend class="legend-head" align="center">Активация кода</legend>
                        <fieldset>
                            <legend>Код</legend>
                            <input type="text" id="activation-code" name="inputActivationCode" placeholder="XXXX-XXXX-XXXX-XXXX" />
                        </fieldset>
                        <hr />
                        <fieldset>
                            <legend>Проверка на бота</legend>
                            <input type="text" name="inputNotBot" />
                        </fieldset>
                        <input type="submit" name="submitActivationCode" />
                    </fieldset>                    
                </form>
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
    <!-- MACK -->
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