<?php //Template Name: type-work ?>
<?php get_template_part( 'template-parts/header/develop-header' ); ?>
<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <main
      class="main main-single block-develop"
      style="<?php the_field('site_grad'); ?>"
    >
      <div class="container">
        <div class="main__text-wrapper">
          <h1>Разработка <?php the_field('site_main-title'); ?></h1>
          <h2 class="block-develop__price">От <?php the_field('site_price'); ?> руб.</h2>
          <h3>
            Создание <?php the_field('site_main-title'); ?> с индивидуальным решением и подходом. Точный
            срок и расчет стоимости устанавливается после изучения Вашего
            проекта. <br>
            <span>Уточнить детали: <a href="tel:+79043417002">8(904)341-70-02</a></span>
          </h3>
          <a href="<?php the_field('home_link','options'); ?>/contact" class="c-button c-button--gooey">
            Заказать разработку
            <div class="c-button__blobs">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </a>
        </div>
      </div>
    </main>
    <section class="tasks">
      <div class="container">
        <h2 class="tasks__title sec-title">
          Какие задачи выполняет <?php the_field('site_title-desk'); ?>?
        </h2>
        <div class="tasks__wrapper wrapper-grid">
          <?php while ( have_rows('site_repeater') ) : the_row(); ?>
            <div class="tasks__item <?php if (get_sub_field('site_big')): ?>
                <?php echo 'big'; ?>
                <?php else: ?>
                <?php echo ''; ?>
                <?php endif; ?>">
              <?php the_sub_field('site_znak'); ?>
              <h3 class="tasks__item-title"><?php the_sub_field('site_title'); ?></h3>
              <p class="tasks__item-text">
                <?php the_sub_field('tekst'); ?>
              </p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <section class="steps">
      <div class="container">
        <h2 class="steps__title sec-title">Этапы работ</h2>
        <div class="steps__wrapper">
          <!-- Slider main container -->
          <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">1</h4>
                <h3 class="steps__item-title">Обсуждение проекта</h3>
                <p class="steps__item-text">
                  Совместное обсуждение концепции и всех деталей проекта для
                  общего понимая работы
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">2</h4>
                <h3 class="steps__item-title">Анализ конкурентов</h3>
                <p class="steps__item-text">
                  Производим анализ ниши и Ваших конкурентов, разрабатываем
                  стратегию сайта и его конкурентные преимущества
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">3</h4>
                <h3 class="steps__item-title">Проработка архитектуры сайта</h3>
                <p class="steps__item-text">
                  Начальная проработка навигации, состав страницы, адаптация
                  вложенных страниц и т.д.
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">4</h4>
                <h3 class="steps__item-title">
                  Разработка индивидуального стиля
                </h3>
                <p class="steps__item-text">
                  Создание логотипа, контрастной цветовой палитры, фирменных
                  шрифтов и подходящих символов
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">5</h4>
                <h3 class="steps__item-title">Разработка клиентской стороны</h3>
                <p class="steps__item-text">
                  Удобная адаптивная, кроссбраузерная вёрстка под все браузеры и
                  современные устройства
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">6</h4>
                <h3 class="steps__item-title">Разработка серверной стороны</h3>
                <p class="steps__item-text">
                  Насадка вёрстки на удобную CMS и проработка качества настроек
                  страницы
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">7</h4>
                <h3 class="steps__item-title">Проверка работы</h3>
                <p class="steps__item-text">
                  Проверка всех процессов сайта, корректировка недочётов и
                  оптимизация кода
                </p>
              </div>
              <div class="swiper-slide steps__item">
                <h4 class="steps__item-number">8</h4>
                <h3 class="steps__item-title">Поддержка и обучение</h3>
                <p class="steps__item-text">
                  Обучение правилам пользования с системой управления сайта
                </p>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    <!--========== INDIVID ==========-->
    <section class="individ" id="individ">
      <div class="container bd-grid">
        <div class="individ__img section-text__img">
          <img src="<?php echo get_template_directory_uri() ?>/img/Untitled-1.png" alt="develop" />
        </div>
        <div class="individ__data section-text__data">
          <h2 class="individ__data-title sec-title">
            Отдельный подход к каждому клиенту
          </h2>
          <p>
            Всё начинается со сбора всей необходимой информации о проекте.
            Благодаря этому мы адекватно и гибко создаём сроки реализации и
            оцениваем работу. Каждый проект разрабатывается с индивидуальным
            подходом для нужной отрасли сайтостроения.
            <br /><br />
            Главным принципом CodeLead является открытость перед клиентом и
            доверительные отношения. Для эффективного контроля процесса
            создания, в ходе работ над проектами мы проводим Интернет
            конференции для заказчиков и их представителей, где показываем
            проделанную работу и согласуем дальнейшие действия.
          </p>
          <a href="<?php the_field('home_link','options'); ?>/communicate" class="c-button c-button--gooey">
            взаимоотношение
            <div class="c-button__blobs">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!--========== WHY NOT ==========-->
    <section class="why">
      <div class="container">
        <h2 class="why__title sec-title">Почему выбирают CodeLead?</h2>
        <div class="why__wrapper wrapper-grid">
          <div class="why__item big">
            <h3 class="why__item-title">Полная прозрачность работы</h3>
            <p class="why__item-text">
              Постоянно демонстрируем ход работ и предостовляем полную
              информацию о том, что сделано. Вместе с заказчиком мы принимаем
              дальнейшие действия. <br />
              <br />
              Мы уважаем клиентов, поэтому всегда показываем функционал сайта и
              объясняем его работу.
            </p>
          </div>
          <div class="why__item">
            <h3 class="why__item-title">Интересные проекты</h3>
            <p class="why__item-text">
              Мы предлагаем своим клиентам решения, которые смогут воплотить в
              жизнь и реализовать любые идеи. CodeLead также не забывает делать
              не только красивые, но и продуктивные решения, так как сделанные
              продукты - наша гордость.
            </p>
          </div>
          <div class="why__item">
            <h3 class="why__item-title">Создние сайта до конца</h3>
            <p class="why__item-text">
              Если клиент взял заказ, то он будет сделан до конца в ближайшие
              сроки. В случае большого заказа, он будет поделён на короткие
              этапы и, утверждая их, гарантировано запустится к необходимой
              дате.
            </p>
          </div>
          <div class="why__item">
            <h3 class="why__item-title">Полный анализ среды бизнеса</h3>
            <p class="why__item-text">
              Начиная разработку, мы проводим анализы всех Ваших конкурентов и
              смотрим на тренды современного рынка. Проводя аналитику рынка,
              разрабатываем стратегию создания и получается проект,
              превосходящий остальные сайты.
            </p>
          </div>
          <div class="why__item big purple">
            <h3 class="why__item-title">Профессионалы своего дела</h3>
            <p class="why__item-text">
              Объединяя неравнодушных людей, их опыт, энергию и знания, мы
              реализуем проекты в области программирования, Интернет маркетинга
              и в смежных с ними отраслях цифровой индустрии. <br />
              <br />
              Каждый проект - это не просто сайт, а продуманное решение,
              нацеленное на потребителей.
            </p>
          </div>
          <div class="why__item">
            <h3 class="why__item-title">Развитие продукта</h3>
            <p class="why__item-text">
              После разработки сайта, работа на этом не заканчивается. Мы
              подключаю Метрику и Google SC для анализа кликов и по желанию
              заказчика продумываем план развития проекта, занимаемся
              комплексным маркетингом продукта.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--========== POPULAR-ORDERS ==========-->
    <section class="popular-orders">
      <div class="container container-medium">
        <h2 class="popular__title sec-title">Индивидуальный проект</h2>
        <div class="popular__item popular-individ popular-first bd-grid">
          <img class="points" src="<?php echo get_template_directory_uri() ?>/img/dot.png" alt="dotts" />
          <div class="popular__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/EuWBj8GXcAEb-MP.png" alt="Индивидуальные решения" />
          </div>
          <div class="popular__item-data">
            <h3 class="popular__item-data-title">Индивидуальные решения</h3>
            <p class="popular__item-data-text">
              Особое решение, создание чего-то уникального, не похожее на
              стандартные сайты конкурентов
            </p>
            <a href="<?php the_field('home_link','options'); ?>/individual" class="c-button c-button--gooey">
              подробнее
              <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php get_footer(); ?>