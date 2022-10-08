<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aliance Production</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Noto+Sans:wght@400;600;700&family=PT+Sans&family=Pacifico&family=Roboto&family=Tenor+Sans&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css?v=1.0" />
</head>

<body class="front-page">
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
        <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
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
  <nav class="navbar">
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
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-icon">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
    <button class="navbar-button button" data-toggle='modal' data-target="#feedback-modal">
      <svg class="phone-icon">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
    <!-- /.header-button button -->
  </nav>
  <!-- /.navbar -->
  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="separator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <button class="button header-button" data-toggle='modal' data-target="#feedback-modal">Подробнее о компании</button>
      </div>

      <!-- /.header-content -->

      <!-- Slider main container -->
      <div class="swiper features-slider">
        <!-- Additional required wrapper -->
        <ul class="swiper-wrapper header-features">
          <!-- Slides -->
          <li class="swiper-slide header-features-item">
            <svg class="features-svg" width="36" height="36">
              <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text">
              Непрерывная работа c&nbsp;2017 года
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="features-svg" width="36" height="36">
              <use href="img/sprite.svg#certificate"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="features-svg" width="36" height="36">
              <use href="img/sprite.svg#control"></use>
            </svg>
            <p class="header-features-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="features-svg" width="36" height="36">
              <use href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="header-features-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg class="features-svg" width="36" height="36">
              <use href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-features-text">Оперативное производство</p>
          </li>
        </ul>

        <!-- If we need navigation buttons -->
        <div class="slider-buttons header-button-wrapper">
          <div class="slider-button-prev header-button-prev">
            <svg class="features-svg" width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
          <div class="slider-button-next header-button-next">
            <svg class="features-svg" width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
     

      <!-- /.header-features -->
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->
  <?php $block_title="схема работы";include_once('./template-parts/steps-blog.php'); ?>
  <!-- /.section section-light -->
  <?php $block_title="Контрактное производство";include_once('./template-parts/prodaction-blog.php'); ?>
 <?php $block_title="собственные торговые марки";include_once('./template-parts/trademarks-blog.php'); ?>
 <?php include_once('./template-parts/founder-blog.php'); ?>
  <!-- /.section founder -->
  <?php include_once('./template-parts/clients-blog.php'); ?>
 
  <!-- /.section clients -->
  <section class="section blog">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title blog-title">Блог экспертов в области производства</h2>
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="./blog.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo1.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
          </a>
          <a href="./blog.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo2.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса
              функционально разнесены на независимые элементы. Безусловно,
              высокотехнологичная...
            </p>
          </a>
          <a href="./blog.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-photo1.jpg" alt="" class="blog-card-image" />
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
          </a>
        </div>
        <!-- If we need navigation buttons -->
        <div class="blog-slider-footer">
          <a href="./blog.php" class="button-link">Весь блог</a>
          <div class="blog-buttons primary-button-wrapper">
            <div class="blog-button-prev primary-button-prev">
              <svg class="features-svg" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg class="features-svg" width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /.blog-slider-footer -->
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section blog -->


  
<?php include_once('footer.php'); ?>
<script src='js/just-validate.production.min.js'></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>