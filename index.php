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
        <a href="#" class="mobile-menu-link">Контрактное производство</a>
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
        <a href="#" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Собственные торговые марки</a>
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
  <section class="section section-light">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">схема работы</h2>

      <div class="swiper steps-slider">
        <ol class="swiper-wrapper steps">
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет
              оценить значение форм воздействия.
            </p>
            <a href="#" class="button-link">Оставить заявку</a>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">
              Заключение<br />
              договора
            </h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые
              <br />элементы.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о
              возможностях приоритизации<br />
              разума над эмоциями.
            </p>
          </li>
        </ol>
        <div class="steps-buttons primary-button-wrapper">
          <div class="steps-button-prev primary-button-prev">
            <svg class="features-svg" width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
          <div class="steps-button-next primary-button-next">
            <svg class="features-svg" width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section section-light -->
  <section class="section prodaction">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">Контрактное производство</h2>
      <div class="cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет
              оценить значение форм воздействия.
            </p>
          </div>
          <img src="img/avto-him.jpg" alt="Автомобильная химия" class="card-image" />
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые элементы.
            </p>
          </div>
          <img src="img/bit-him.jpg" alt="Бытовая химия" class="card-image" />
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img src="img/dezinfect.jpg" alt="Дезинфицирующие средства" class="card-image" />
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет
              оценить значение форм воздействия.
            </p>
          </div>
          <img src="img/dezinfect.png" alt="Пищевые аэрозоли" class="card-image" />
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img src="img/avto-him.png" alt="Косметическая продукция" class="card-image" />
        </a>

        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые элементы.
            </p>
          </div>
          <img src="img/bit-him.png" alt="Краски аэрозольные" class="card-image" />
        </a>
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.prodaction -->
  <section class="section marks">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title">
        собственные <span class="section-title-text">торговые</span> марки
      </h2>
      <div class="brends">
        <div class="brend">
          <svg class="brend-image">
            <use href="img/sprite.svg#AG"></use>
          </svg>

          <h3 class="brend-title">Автохимия AG-Tech</h3>
          <p class="brend-text">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
        <div class="brend">
          <svg class="brend-image">
            <use href="img/sprite.svg#AP"></use>
          </svg>

          <h3 class="brend-title">Автохимия AP</h3>
          <p class="brend-text">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /.section marks -->
  <section class="section founder">
    <img src="./img/founder.jpg" alt="founter" class="founter-photo" />
    <div class="container">
      <div class="founder-content-wrapper">
        <div class="founder-content">
          <div class="separator"></div>
          <h2 class="section-title">Отношение к делу и к клиентам</h2>
          <p class="founder-text">
            Кстати, интерактивные прототипы описаны максимально подробно.
            Повседневная практика показывает, что укрепление и развитие
            внутренней структуры говорит о возможностях соответствующих
            условий активизации. Внезапно, независимые государства, которые
            представляют собой яркий пример континентально-европейского типа
            политической культуры, будут подвергнуты целой серии независимых
            исследований. С учётом сложившейся международной обстановки,
            синтетическое тестирование выявляет срочную потребность системы
            массового участия.
          </p>
          <p class="founder-text">
            А ещё действия представителей оппозиции, превозмогая сложившуюся
            непростую экономическую ситуацию, в равной степени предоставлены
            сами себе. Не следует, однако, забывать, что выбранный нами
            инновационный путь в значительной степени обусловливает важность
            дальнейших направлений развития.
          </p>
          <a href="#" class="button-link">О нашей миссии</a>
          <!-- /.founder-text -->
        </div>
      </div>
      <!-- /.founder-content-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section founder -->
  <section class="section clients">
    <div class="container">
      <div class="separator clients-separator"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h2 class="section-title">
            Производим аэрозольную продукцию для разных сфер
          </h2>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#him"></use>
              </svg>Химические производства
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#car"></use>
              </svg>Автомойки
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#eat"></use>
              </svg>Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#brush"></use>
              </svg>Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#cosmetic"></use>
              </svg>Косметические средства
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#car-cosm"></use>
              </svg>Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#shirt"></use>
              </svg>Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#boots"></use>
              </svg>Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#brickts"></use>
              </svg>Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg width="30" class="clients-list-icon">
                <use href="img/sprite.svg#more"></use>
              </svg>И многих других
            </li>
          </ul>
        </div>
        <!-- /.clients-content -->
        <div class="clients-logo-list">
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
          <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo" /></a>
        </div>
        <!-- /.clients-logo -->
      </div>
      <!-- /.clients-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section clients -->
  <section class="section blog">
    <div class="container">
      <div class="separator"></div>
      <h2 class="section-title blog-title">Блог экспертов в области производства</h2>
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
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
          <a href="#" class="swiper-slide blog-card">
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
          <a href="#" class="swiper-slide blog-card">
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
          <a href="" class="button-link">Весь блог</a>
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