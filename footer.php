<section class="cta">
    <div class="bg-grey section-cta">
      <img src="img/cta.png" alt="call to action" class="cta-image">
      <div class="cta-form-wrapper container">
        <form action="handler.php" method='POST' class="cta-form">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!</p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id='user-name' type="text" class="input" name='username' placeholder="" />
              <label class='input-group-label' for="user-name">Имя</label>
            </div>
            <div class="input-group">
              <input id='user-phon' type="tel" class="input" name='userphone' placeholder="" />
              <label class='input-group-label' for="user-phon" >Номер телефона</label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="cta-form-footer">
            <button type="submit" class="button cta-form-button">Отправить заявку</button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shild"></use>
              </svg>
              <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                конфиденциальность информации!</p>
            </div>
          </div>
          <!-- /.cta-form-footer -->
        </form>
      </div>

    </div>
    <!-- /.bg-grey -->
  </section>
  <!-- /.section cta -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <svg class="footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <a href="tel:+74996861014" class="footer-phone">+7 (498) 686-10-14</a>
        <div class="footer-info-wrapper">
          <div class="footer-info">
            <svg class="footer-icon">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-info-adress">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
          </div>
          <div class="footer-info">
            <svg class="footer-icon">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <!-- /.footer-info-wrapper -->
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon" width="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>

        </div>
        <!-- /.footer-social -->
      </div>
      <!-- /.footer-top -->
    </div>
    <!-- /.container -->
    <hr class="footer-separator" />
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-columns-2">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автомобильная химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Бытовая химия</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Дезинфицирующие средства</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Пищевые аэрозоли</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Косметическая продукция</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Краски аэрозольные</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AG-Tech</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AP</a></li>

          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
        <div class="footer-menu-wrapper">

          <ul class="footer-menu-list ">
            <li class="footer-menu-item"><a href="./about.html" class="footer-menu-link footer-menu-link-bold">О компании</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a></li>
            <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a></li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->
      </div>
      <!-- /.footer-bottom -->
    </div>

    <!-- </div> -->
    <!-- /.container -->
    <hr class="footer-separator" />
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">&copy; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.</p>
          <a href="#" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- /.footer-legal -->
        <div class="footer-author">
          <span class="made-in made-in2">Дизайн и разработка:</span>
          <span class="made-in made-in3">Сделано в</span>
          <svg class="svg-autor">
            <use href="img/sprite.svg#ruso"></use>
          </svg>
          <!-- /.made-in -->
        </div>
        <!-- /.footer-author -->
      </div>
    </div>
    <!-- /.footer-wrapper -->
    <!-- /.container -->
  </footer>
  <!-- /.footer -->