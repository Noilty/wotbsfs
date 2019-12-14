<?php if ( !false ): ?>
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
                    С возвращением <strong>Noilty</strong>!
                    <ul>
                        <a href="/page/activation/">
                            <li>Активировать код</li>
                        </a>
                        <a href="/page/settings/">
                            <li>Настройки</li>
                        </a>
                        <?php if ( !false ): ?>
                        <a href="/page/admin/">
                            <li class="admin">Администратор</li>
                        </a>
                        <?php endif; ?>
                        <a href="/page/exit/">
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
                    <li>Войдите чтобы продолжить!</li>
                </a>
            </ul>
        </div>
        <!-- / Правая часть меню -->            
    </nav>
<?php endif; ?>
