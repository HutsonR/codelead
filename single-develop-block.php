<?php //Template Name: sites ?>
<?php get_template_part( 'template-parts/header/develop-header' ); ?>
    <main class="main main-single block-develop">
      <div class="container">
        <div class="main__text-wrapper">
          <h1>Разработка сайта под ключ</h1>
          <h3>
            Создание разных типов сайтов с индивидуальным решением и подходом.
            Точный срок и расчет стоимости устанавливается после изучения Вашего
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
    <!--========== DEVELOP ==========-->
    <section class="develop">
      <div class="container">
        <h2 class="develop__title sec-title">Разработка сайтов</h2>
        <p class="develop__subtitle">
          Создание и продвижение сайтов любой сложности гибким и эффективным
          подходом
        </p>
        <div class="develop__wrapper">
          <div class="develop__item">
            <i class="fas fa-laptop-code"></i>
            <h2 class="develop__item-title">Landing Page</h2>
            <p class="develop__item-text">
              Разработка продающего лендинга по современному дизайну
            </p>
            <a href="<?php the_field('home_link','options'); ?>/landing-page" class="c-button c-button--gooey">
              подробнее
              <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </a>
          </div>
          <div class="develop__item">
            <i class="fas fa-laptop-house"></i>
            <h2 class="develop__item-title">Корпоративный сайт</h2>
            <p class="develop__item-text">
              Официальное представление в Интернете бренда вашей компании
            </p>
            <a href="<?php the_field('home_link','options'); ?>/corporation" class="c-button c-button--gooey">
              подробнее
              <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </a>
          </div>
          <div class="develop__item">
            <i class="fas fa-shopping-cart"></i>
            <h2 class="develop__item-title">Интернет-магазин</h2>
            <p class="develop__item-text">
              Отличное решение для быстрого начала вашего бизнеса в Интернете
            </p>
            <a href="<?php the_field('home_link','options'); ?>/magazine" class="c-button c-button--gooey">
              подробнее
              <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </a>
          </div>
          <div class="develop__item">
            <i class="fas fa-comments"></i>
            <h2 class="develop__item-title">Веб-портал</h2>
            <p class="develop__item-text">
              Информационный ресурс для просмотра новостей и общения людей
            </p>
            <a href="<?php the_field('home_link','options'); ?>/web-portal" class="c-button c-button--gooey">
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
    <section class="popular-orders">
      <div class="container container-medium">
        <h2 class="popular__title sec-title">Поисковое продвижение сайта</h2>
        <div class="popular__item popular-first bd-grid">
          <img class="points" src="<?php echo get_template_directory_uri() ?>/img/dot.png" alt="dotts" />
          <div class="popular__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/Google sitemap-bro.svg" alt="Продвижение сайта" />
          </div>
          <div class="popular__item-data">
            <h3 class="popular__item-data-title">Продвижение сайта</h3>
            <p class="popular__item-data-text">
              Продвижение вашего сайта путём настройки рекламной кампании и
              оптимизации текста
            </p>
            <a href="<?php the_field('home_link','options'); ?>/seo" class="c-button c-button--gooey">
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
<?php get_footer(); ?>
