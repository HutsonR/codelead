<?php get_template_part( 'template-parts/header/main-header' ); ?>
    <main class="main" id="main">
      <div class="container">
        <div class="main__text-wrapper">
          <h1>Разработка и продвижение сайтов</h1>
          <h3>
            Веб-разработка и продвижение сайтов с индивидуальным подходом.
            Уточнить детали: 8(904)341-70-02
          </h3>
          <a href="<?php the_field('home_link','options'); ?>/contact" class="c-button c-button--gooey">
            Заказать сайт
            <div class="c-button__blobs">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </a>
        </div>
      </div>
    </main>
    <!--========== ABOUT-PREV ==========-->
    <section class="about-prev" id="about-prev">
      <div class="container bd-grid">
        <div class="about-prev__img section-text__img">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo2.png" alt="develop" />
        </div>
        <div class="about-prev__data section-text__data">
          <h2 class="about-prev__data-title sec-title">Знакомство</h2>
          <p>
            Почти 6 лет назад, мы выполняли удаленную работу для агентств,
            консультировали стартапы и сотрудничали с талантливыми людьми для
            создания веб-продуктов как для бизнеса, так и для потребителей.
            <br />
            Мы создаём успешные адаптивные веб-сайты, которые являются быстрыми,
            простыми в использовании и построены с использованием лучших
            практик. Основная область наших знаний - это интерфейсная
            разработка, HTML, CSS, JS, продвижение сайтов создание малых и
            средних веб-приложений. <br />
            Мы разрабатываем качественную и высокопроизводительную
            ИТ-инфраструктуру, которая эффективно решает коммерческие задачи и
            реализуется в соответствии со спецификой Вашего бизнеса.
          </p>
        </div>
      </div>
    </section>
    <!--========== POPULAR-ORDERS ==========-->
    <section class="popular-orders">
      <div class="container container-medium">
        <h2 class="popular__title sec-title">Популярные IT решения</h2>
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
        <div class="popular__item bd-grid">
          <img class="points" src="<?php echo get_template_directory_uri() ?>/img/dot.png" alt="dotts" />
          <div class="popular__item-data">
            <h3 class="popular__item-data-title">Разработка сайта под ключ</h3>
            <p class="popular__item-data-text">
              Создание разных типов сайтов с индивидуальным решением и подходом
            </p>
            <a
              href="<?php the_field('home_link','options'); ?>/sites"
              class="c-button c-button--gooey"
            >
              подробнее
              <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </a>
          </div>
          <div class="popular__item-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/Landing page-amico.svg" alt="landing page" />
          </div>
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
    <!--========== INDIVID ==========-->
    <section class="individ" id="individ">
      <div class="container bd-grid">
        <div class="individ__data section-text__data">
          <h2 class="individ__data-title sec-title">
            Профессионалы своего дела
          </h2>
          <p>
            Студия CodeLead является лидером в областе сайтостроения, имеет
            многолетний опыт работы и большое количество разработанных с нуля, а
            также доработанных проектов. <br />
            <br />
            Объединяя опыт и знания мы создаём качественную, производительную и
            надёжную продукцию в области программирования и Интернет-маркетинга,
            которая эффективно решает Ваши задачи и реализуется в соответствии
            со спецификой Вашего бизнеса. <br />
            <br />
            Каждый день мы стремимся к лучшему - совершенствуем технологии и
            программные решения, идем в ногу со временем, инвестируем в ценные
            кадры, предлагая своим клиентам качественные и высокотехнологичные
            продукты.
          </p>
        </div>
        <div class="individ__img section-text__img">
          <img src="<?php echo get_template_directory_uri() ?>/img/profi.png" alt="develop" />
        </div>
      </div>
    </section>
    <!--========== EXAMPLES ==========-->
    <section class="portfolio">
      <div class="container">
        <h2 class="portfolio__title sec-title">Выполненные работы</h2>
        <div class="portfolio__container bd-grid">
          <?php  $query = new WP_Query( 'post_type=work' ); ?>
         <?php while ( $query->have_posts()):$query->the_post(); ?>
			<div class="portfolio__item">
				<div class="portfolio__img">
				<img src="<?php the_field('work_img'); ?>" alt="<?php the_field('work_title'); ?>" />

				<a href="<?php echo get_the_permalink(); ?>" class="portfolio__link">
					<span class="portfolio__link-name">Посмотреть детали</span>
				</a>
				</div>
				<div class="portfolio__data">
					<h3><?php the_field('work_title'); ?></h3>
				</div>
			</div>
			<?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
        </div>
        <div class="portfolio__button">
          <a href="<?php the_field('home_link','options'); ?>/works" class="c-button c-button--gooey">
            все работы
            <div class="c-button__blobs">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </a>
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
    <!--========== REVIEWS ==========-->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title sec-title">Отзывы наших клиентов</h2>
        <div class="reviews__wrapper">
          <div>
            <div class="reviews__item">
              <img
                src="<?php echo get_template_directory_uri() ?>/img/nataly.jpg"
                alt="logo-user"
                class="reviews__item-logo"
              />
              <p class="reviews__item-name">Наталья</p>
              <p class="reviews__item-desc">
                Сотрудничаю с Романом по нескольким проектам. Очень довольна
                качеством и ответственным подходом к выполнению заданий. Могу с
                чистой совестью рекомендовать его, если вам нужны услуги
                web-специалиста.
              </p>
              <p class="reviews__item-company">
                Solar Web Studio (ИП Тутакина Н.П,)
              </p>
            </div>
          </div>
          <div>
            <div class="reviews__item">
              <img
                src="https://codelead.ru/wp-content/uploads/2021/02/whatsapp-image-2021-02-15-at-20.05.23.jpeg"
                alt="logo-user"
                class="reviews__item-logo"
              />
              <p class="reviews__item-name">Александр</p>
              <p class="reviews__item-desc">
                Задание Романом выполнено вовремя, не пропадал. Был всегда на
                связи. Правки, даже которые не обговаривали, выполнил
                великолепно. Предлагал свои более верные решения. Буду работать
                еще. Спасибо, Роман!
              </p>
              <p class="reviews__item-company">Computy Studio</p>
            </div>
          </div>
          <div>
            <div class="reviews__item">
              <img
                src="<?php echo get_template_directory_uri() ?>/img/oleg.jpg"
                alt="logo-user"
                class="reviews__item-logo"
              />
              <p class="reviews__item-name">Олег</p>
              <p class="reviews__item-desc">
                Мы и не думали наткнуться на такого профессионального
                разработчика. Наши поиски разработчика прошли удачно. Роман
                оказался знатоком своего дела. Теперь имя Роман ассоциируется в
                нашей компании со словом "Профессионализм"!
              </p>
              <p class="reviews__item-company">FridayCompanyLiciDreqi</p>
            </div>
          </div>
          <div>
            <div class="reviews__item">
              <img
                src="<?php echo get_template_directory_uri() ?>/img/perfil.png"
                alt="logo-user"
                class="reviews__item-logo"
              />
              <p class="reviews__item-name">Никита</p>
              <p class="reviews__item-desc">
                Всё чётко, грамотно и в срок. На все мои замечания вносились
                поправки. Вместе с сайтом получил подробное видео по работе и
                наполнению нового сайта. Даже после окончания работы, поддержка
                по сайту продолжается. Буду обращаться ещё.
              </p>
              <p class="reviews__item-company">GrabCompany</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>