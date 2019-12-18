<?php if ( isset($_SESSION['UserLogged']) ): ?>
<nav class="grid-nav">
    <!-- Левая часть меню -->
    <div class="grid-nav__item">
        <ul>
            <a href="/page/main/">
                <li>Главная</li>
            </a>
            <a href="/page/source/" title="Browser Source (OBS)" target="_blank">
                <li>Источник</li>
            </a>
            <li>
                Центр поддержки
                <ul>
                    <a href="/page/ticket/">
                        <li>Мои заявки</li>
                    </a>
                    <a href="/page/ban/">
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
                С возвращением <strong><?= $_SESSION['UserLogged'] ?></strong>!
                <ul>
                    <a href="/page/key/">
                        <li>Использовать код</li>
                    </a>
                    <a href="/page/settings/">
                        <li>Настройки</li>
                    </a>
                    <?php if ( !false ): ?>
                    <a href="/page/admin/">
                        <li class="admin">Администратор</li>
                    </a>
                    <?php endif; ?>
                    <a href="../../assets/connect/core/script/logout.php">
                        <li>Выход</li>
                    </a>
                </ul>
            </li>
        </ul>
    </div>
    <!-- / Правая часть меню -->            
</nav>
<?php else: ?>
<nav class="grid-nav">
    <!-- Левая часть меню -->
    <div class="grid-nav__item">
        <ul>
            <a href="/page/main/">
                <li>Главная</li>
            </a>
        </ul>
    </div>
    <!-- / Левая часть меню -->

    <!-- Правая часть меню -->
    <div class="grid-nav__item">
        <ul>
            <a href="/page/login/">
                <li>Войти</li>
            </a>
            <a href="/page/signup/">
                <li>Создать аккаунт</li>
            </a>
        </ul>
    </div>
    <!-- / Правая часть меню -->            
</nav>
<?php endif;

