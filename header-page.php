<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $page_title?> - Aliance Production</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Noto+Sans:wght@400;600;700&family=PT+Sans&family=Pacifico&family=Roboto&family=Tenor+Sans&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css?v=1.0" />
</head>

<body class="about">
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="./about.php" class="mobile-menu-link">О&nbsp;компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Бытовая химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./trademarks.php" class="mobile-menu-link">Собственные торговые марки</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Бытовая химия</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Контакты</a>
            </li>
        </ul>

        <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
        <div class="mobile-info">
            <svg class="phone-icon">
                <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="mobile-info-adress">
                г. Мосвка, Холодильный пер. 4к1с8
            </address>
        </div>
        <div class="mobile-info">
            <svg class="phone-icon">
                <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <div class="mobile-network">
            <svg class="phone-icon">
                <use href="img/sprite.svg#vk"></use>
            </svg>
            <svg class="phone-icon">
                <use href="img/sprite.svg#inst"></use>
            </svg>
        </div>
    </div>
    <nav class="navbar navbar-light">
        <a href="" class="mobile-menu-toggle">
            <div class="molile-menu-line"></div>
            <div class="molile-menu-line"></div>
            <div class="molile-menu-line"></div>
        </a>
        <a href="./index.php" class="header-logo">
            <svg class="logo-svg logo-light">
                <use href="img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="img/sprite.svg#logo"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav-item">
                <a href="./about.php" class="header-nav-link">О&nbsp;компании</a>
            </li>
            <li class="header-nav-item">
                <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
                <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">Новости</a>
            </li>
            <li class="header-nav-item">
                <a href="./contacts.php" class="header-nav-link">Контакты</a>
            </li>
        </ul>
        <div class="header-phone">
            <svg class="phone-icon">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
        </div>
        <!-- /.header-phone -->
        <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="phone-icon">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
        <!-- /.header-button button -->
    </nav>
    <!-- /.navbar -->
    <header class="header  <?= $header_stile?>">
        <div class="container">
            <div class=" header-content-page">
                <div class="header-page-wrapper">
                    <div class="separator"></div>
                    <h1 class="header-title header-title-page"><?= $page_title?></h1>
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs-item">
                            <a href="./index.php" class="breadcrumbs-link">Главная</a>  
                        </li>
                        <li class="breadcrumbs-item active">
                            <a href="" class="breadcrumbs-link"><?= $page_title?></a> 
                        </li>
                    </ul>
                    <!-- </div> -->
                    <!-- /.header-nav-page -->

                </div>

            </div>
        </div>
    </header>