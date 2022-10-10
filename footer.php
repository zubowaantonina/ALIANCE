<section class="cta">
    <div class="bg-grey section-cta">
    <picture class="cta-image" >
              <source type="image/webp" srcset="./img/cta.webp" class="cta-image" >
              <source type="image/jpeg" srcset="img/cta.png" class="cta-image" >
              <img src="img/cta.png" alt="call to action" class="cta-image" >
            </picture>
    
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
              <input id='user-phon' type="tel" class="input phone-mask" name='userphone' placeholder=""/>
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
 
<div class="modal" id="feedback-modal">
  <div class="modal-dialog">
  <h2 class="modal-title">Есть вопросы?</h2>
  <a href="#" class="modal-close" data-toggle='modal' data-target="#feedback-modal">
    <svg class="close-icon" width="24">
      <use href="img/sprite.svg#close"></use>
    </svg>
  </a>
  <p class="modal-text">
    Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем
    даже в самых сложных случаях!
  </p>
  <form action="handler.php" method='POST' class="modal-form">
    <div class="input-group-wrapper input-group-vertical">
      <div class="input-group modal-input-group">
        <input id='modal-user-name' type="text" class="input modal-input" name='username' placeholder=""/>
        <label class='input-group-label modal-group-label' for="modal-user-name">Имя</label>
      </div>
      <div class="input-group modal-input-group">
        <input id='modal-user-phon' type="tel" class="input modal-input phone-mask" name='userphone' placeholder=""/>
        <label class='input-group-label modal-group-label' for="modal-user-phon">Номер телефона</label>
      </div>
    </div>
    <!-- /.input-group-wrapper -->
    <div class="modal-form-footer">
      <button type="submit" class="button modal-form-button">Отправить заявку</button>
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

<?php include_once('./template-parts/footer-bottom.php'); ?>


<div class="modal sending" id="alert-modal">
 <div class="modal-dialog sending-dialog">
            <picture class="sending-image" >
                <source type="image/webp" srcset="./img/thanks_illu.webp" class="sending-image">
                <source type="image/jpeg" srcset="./img/thanks_illu.png" class="sending-image">
                <img src="./img/thanks_illu.png" alt=""  class="sending-image">
            </picture>
 
  <a href="./index.php"class="modal-close sending-close" data-toggle='modal' data-target="#alert-modal">
    <svg class="close-icon-sending" width="18">
      <use href="img/sprite.svg#close"></use>
    </svg>
  </a>
  <h2 class="sending-title">Спасибо за заявку!</h2>
  
  <p class="sending-text">
  Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
  </p>
 
    <!-- /.input-group-wrapper -->
    <div class="sending-form-footer">
      <button class="button sending-form-button">Вернуться на главную</button>
   </div>  
</div>
</div>  
    <script src="js/swiper-bundle.min.js"></script>
    <script src='js/just-validate.production.min.js'></script>
  <script src="js/main.js"></script>
  </footer>
  <!-- /.footer -->
  