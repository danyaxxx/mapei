<?php
    $catalog_pdf = '#';
    $delivery = '#';
    $contacts = '#';
    $search = '';
    $cart = '#';
    $catalog = '#';
    $complex_sys = '#';
    $services = '#';
    $about = '#';
    $articles = '#';

    if (!isset($link)) { $link = ''; }
?>
<header>
    <div class="header-top">
        <div class="container header-top-inner">
            <a class="logo blue header-top-logo" href="<?php echo $site; ?>">
                <img class="logo__img" src="./images/logo.png" alt="">
                <span class="logo__descr">Официальный дилер</span>
            </a>
            <div class="header-top-menu">
                <div class="header-top-city">
                    Выбор города: <span class="blue">Екатеринбург &#9660;</span>
                </div>
                <div>
                    <a href="tel:+73432260519" class="header-top__phone blue">+7 (343) 226-05-19</a>
                    <p class="header-top__time">Время работы с 08:00 до 20:00</p>
                </div>
                <div class="header-top-items">
                    <a href="<?php echo $catalog_pdf; ?>" class="header-top-item">Каталоги PDF</a>
                    <a href="<?php echo $delivery; ?>" class="header-top-item">Оплата/Доставка</a>
                    <a href="<?php echo $contacts; ?>" class="header-top-item">Контакты</a>
                </div>
            </div>
            <form class="search header-top-search blue" action="<?php echo $search; ?>">
                <span>Поиск</span>
                <input class="search__input" type="search" placeholder="Введите наименование товара для поиска">
                <img class="search__icon" src="./images/header-search.png" alt="">
                <img class="search__icon__close" src="./images/search-close.svg" alt="">
            </form>
            <div class="header-top-mobile">
                <a href="tel:+73432260519" class="header-top-mobile__phone">
                    <img src="./images/phone.svg" alt="">
                </a>
                <a href="<?php echo $cart; ?>" class="header-top-mobile__cart">
                    <img src="./images/handcart-icon.png" alt="">
                    <span class="header-top-mobile__cart-count">99</span>
                </a>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <input type="checkbox" name="" id="mobile-nav-check">
        <div class="container mobile-nav">
            <label for="mobile-nav-check" class="mobile-nav-menu"></label>
            <form class="search mobile-search" action="<?php echo $search; ?>">
                <input class="search__input" type="search" placeholder="Введите наименование товара для поиска">
                <img class="search__icon" src="./images/header-search.png" alt="">
            </form>
            <nav class="header-nav">
                <div class="header-nav-item">
                    <a href="<?php echo $catalog; ?>" class="header-nav-item__link">
                        <svg class="header-nav__icon" width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="20" height="2"></rect>
                            <rect y="5" width="20" height="2"></rect>
                            <rect y="10" width="20" height="2"></rect>
                        </svg>
                        <span>Каталог</span>
                        <div class="header-nav-item__oc"></div>
                    </a>
                    <div class="header-dropdown-menu">
                        <div class="header-dropdown-menu-inner">
                            <span class="header-dropdown-menu__category-title">Категории</span>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">
                                    Клей
                                    <span class="header-dropdown-menu__oc"></span>
                                </a>
                                <div class="header-dropdown-menu-sorted">
                                    <div class="header-dropdown-menu-sorted-i">
                                        <div>
                                            <span class="header-dropdown-menu-sorted__title">По продуктам</span>
                                            <ul class="header-dropdown-menu-sorted-items">
                                                <li>
                                                    <a class="header-dropdown-menu-sorted__item" href="#">
                                                        Kiraflex Maxi <span>Хит</span>
                                                    </a>
                                                </li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Vapekley Extra</a></li>
                                                <li>
                                                    <a class="header-dropdown-menu-sorted__item" href="#">
                                                        Adesilex P7 <span>Топ</span>
                                                    </a>
                                                </li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Adesilex P9</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Keracrete</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Ultralite</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Graniparid</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <span class="header-dropdown-menu-sorted__title">По группам</span>
                                            <ul class="header-dropdown-menu-sorted-items">
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Дисперсионные</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Морозостойкие</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Реактивные</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Цементные</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Эластичные</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для плитки</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для напольных покрытий</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для ПВХ</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <span class="header-dropdown-menu-sorted__title">Применение</span>
                                            <ul class="header-dropdown-menu-sorted-items">
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для ванной</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для бассейна</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для керамической плитки</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для керамогранита</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для клинкерной плитки</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для наружных работ</a></li>
                                                <li><a class="header-dropdown-menu-sorted__item" href="#">Для натурального камня</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Ремсоставы</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Гидроизоляции</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Ровнители</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Затирки</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Герметики</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Грунтовки</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Штукатурки</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Добавки</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-item">
                    <a href="<?php echo $complex_sys; ?>" class="header-nav-item__link">Комплексные системы</a>
                </div>
                <div class="header-nav-item">
                    <a href="<?php echo $services; ?>" class="header-nav-item__link">
                        <span>Услуги</span>
                        <div class="header-nav-item__oc"></div>
                    </a>
                    <div class="header-dropdown-menu">
                        <div class="header-dropdown-menu-inner">
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Выезд на объект</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Заказ расчета</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Консультация</a>
                            </div>
                            <div class="header-dropdown-menu-item">
                                <a href="#" class="header-dropdown-menu-item__link">Работа с подрядчиками</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-item">
                    <a href="<?php echo $about; ?>" class="header-nav-item__link<?php if ($link == 'about') { echo ' active '; } ?>">О компании</a>
                </div>
                <div class="header-nav-item">
                    <a href="<?php echo $articles; ?>" class="header-nav-item__link">Статьи</a>
                </div>
                <div class="header-nav-item mobile">
                    <a href="<?php echo $catalog_pdf; ?>" class="header-nav-item__link">Каталоги PDF</a>
                </div>
                <div class="header-nav-item mobile">
                    <a href="<?php echo $delivery; ?>" class="header-nav-item__link">Оплата/Доставка</a>
                </div>
                <div class="header-nav-item mobile">
                    <a href="<?php echo $contacts; ?>" class="header-nav-item__link">Контакты</a>
                </div>
            </nav>
            <a href="<?php $cart; ?>" class="header-bottom-cart">
                <img src="./images/handcart-icon.png" alt="" class="header-bottom-cart__icon">
                <div class="header-bottom-cart__info">
                    <div>Корзина</div>
                    <div class="header-bottom-cart__info-cp">
                        <span>999</span> | <span>99999</span> &#8381;
                    </div>
                </div>
            </a>
        </div>
    </div>
</header>
