<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10">
    <title>Log In - WOT: BSFS</title>    
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
        <div id="form-login" class="grid-content" style="display: block;" align="center">
            <div style="padding: 20px 450px 20px 450px;">
                <form action="" method="POST">
                    <fieldset>
                        <legend class="legend-head" align="center">Вход</legend>
                        <fieldset>
                            <legend>Электронная почта</legend>
                            <input type="email" name="inputLogin" />
                        </fieldset>
                        <fieldset>
                            <legend>Пароль</legend>
                            <input type="password" name="inputPassword" />
                        </fieldset>
                        <hr />
                        <fieldset>
                            <legend>Проверка на бота</legend>
                            <input type="text" name="inputNotBot" />
                        </fieldset>
                        <input type="submit" name="submitLogin" />
                    </fieldset>                    
                </form>
                <a href="/wotbsfs/page/signup/" style="color: #000;">Нет аккаунта?</a>
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
    <!-- / jQuery mini -->   
    
</body>
    
</html>