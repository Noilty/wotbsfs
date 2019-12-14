<?php if ( !false ): ?>
    <nav class="grid-nav">
        <!-- Левая часть меню -->
        <div class="grid-nav__item">
            <ul>
                <a href="/page/main">
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
                        <a href="/page/activation">
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
<?php else: ?>
    <nav class="grid-nav">
        <!-- Левая часть меню -->
        <div class="grid-nav__item">
            <ul>
                <a href="/page/main">
                    <li>Главная</li>
                </a>
            </ul>
        </div>
        <!-- / Левая часть меню -->

        <!-- Правая часть меню -->
        <div class="grid-nav__item">
            <ul>
                <a href="/page/login">
                    <li>Войдите чтобы продолжить!</li>
                </a>
            </ul>
        </div>
        <!-- / Правая часть меню -->            
    </nav>
<?php endif; ?>
