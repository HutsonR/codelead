	    <!--========== CONTACT ==========-->
    <section class="contact" id="contact">
      <div class="container">
        <h1 class="sec-title">Заявка на разработку</h1>
        <p class="develop__subtitle">
          В ближайшее время мы свяжемся с вами, согласуем выполнение, грамотно
          расставим сроки и сформируем цену
        </p>
      </div>
      <div class="container container-medium">
        <div class="contact__wrapper">
          <div class="contact__link">
            <div class="contact__item">
              <i class="fab fa-telegram-plane"></i
              ><a href="https://t.me/HutsonR">@HutsonR</a>
              <p>Связаться в Telegram</p>
            </div>
            <div class="contact__item">
              <i class="fas fa-phone-square"></i
              ><a href="tel:+79043417002">+79043417002</a>
              <p>
                Связаться по телефону <br />
                или Whats App
              </p>
            </div>
            <div class="contact__item">
              <i class="fas fa-envelope"></i
              ><a href="email:hutsonr155@gmail.com">hutsonr155@gmail.com</a>
              <p>Задать вопрос на почту</p>
            </div>
          </div>
          <div class="contact__form">
            <form
              action="<?php echo get_template_directory_uri() ?>/mail.php"
              method="POST"
              accept-charset="utf-8"
            >
              <input
                placeholder="Имя*"
                type="text"
                name="user_name"
                required="required"
              />
              <input
                placeholder="E-mail*"
                type="email"
                name="user_email"
                required="required"
              />
              <textarea
                placeholder="Опишите задачу или задайте вопрос*"
                name="textsend"
                required="required"
              ></textarea>
              <div class="col">
                <input type="hidden" name="token" id="token" />
                <button type="submit" class="c-button c-button--gooey">
                  отправить
                  <div class="c-button__blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                  </div>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container container-medium">
        <div class="footer__wrapper">
          <div class="footer__item">
            <h2 class="header__logo">Code<span>Lead</span>.ru</h2>
            <ul class="footer__item-contact">
              <li>
                <a href="https://t.me/HutsonR"><i class="fab fa-telegram-plane"></i></a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=79043417002"><i class="fab fa-whatsapp"></i></a>
              </li>
              <li>
                <a href="https://vk.com/roma_hutson"><i class="fab fa-vk"></i></a>
              </li>
            </ul>
          </div>
          <div class="footer__item">
            <h2 class="header__logo">Создание сайтов</h2>
            <ul>
              <li><a href="<?php the_field('home_link','options'); ?>/corporation">Корпоративный сайт</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/landing-page">Landing Page</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/magazine">Интернет-магазин</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/web-portal">Веб-портал</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/individual">Индивидуально</a></li>
            </ul>
          </div>
          <div class="footer__item">
            <h2 class="header__logo">Услуги</h2>
            <ul>
              <li><a href="<?php the_field('home_link','options'); ?>/sites">Вёрстка</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/sites">Дизайн UI|UX</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/seo">Контент-маркетинг</a></li>
              <li><a href="<?php the_field('home_link','options'); ?>/contact">Поддержка сайта</a></li>
            </ul>
          </div>
          <div class="footer__item">
            <h2 class="header__logo">Контакты</h2>
            <ul>
              <li>
                <i class="fab fa-telegram-plane"></i
                ><a href="https://t.me/HutsonR">@HutsonR</a>
              </li>
              <li>
                <i class="fas fa-phone-square"></i
                ><a href="tel:+79043417002">+79043417002</a>
              </li>
              <li>
                <i class="fas fa-envelope"></i
                ><a href="email:hutsonr155@gmail.com">hutsonr155@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
        <p>
          © 2021. CodeLead, официальный сайт. Сайт codelead.ru использует
          куки-файлы и другие технологии, чтобы помочь вам в навигации, а также
          предоставить лучший пользовательский опыт, анализировать использование
          наших продуктов и услуг, повысить качество рекламных и маркетинговых
          активностей. Если Вы не хотите, чтобы Ваши пользовательские данные
          обрабатывались, пожалуйста, ограничьте их использование в своём
          браузере.
        </p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/8761c8ae2d.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
	 </script>
	 <?php wp_footer(); ?>
  </body>
</html>
