<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
      />
    <meta name="format-detection" content="telephone=no" />
    <meta name="yandex-verification" content="98ac3d76a3c25f2b" />
    <meta name="p:domain_verify" content="6d0da5a59f116704c684aa699ce2ab86"/>
    <meta name="google-site-verification" content="yY-rIxrBCpsDSNPdombi36SZHYr_WoUHCL4xjNPL3lU" />
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="CodeLead">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/img/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/img/fav/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/img/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- <link
        href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
        rel="stylesheet"
      /> -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(64630069, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/64630069" style="position:absolute; left:-9999px;" alt="yandex" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta property="og:title" content="CodeLead - Разработка и дизайн сайтов. Создайте свой личный сайт">
    <meta property="og:description" content="CodeLead Разрабатываем сайты, интернет магазины более 6 лет. Создадим лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
    <meta property="og:url" content="https://codelead.ru/">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="https://codelead.ru/wp-content/uploads/2020/06/screenshot-11.png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">
    <title>CodeLead - Разработка и дизайн сайтов. Создайте свой личный сайт</title>
    <meta name="description" content="CodeLead Разрабатываем сайты, интернет магазины более 6 лет. Создадим лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container">
        <a href="<?php the_field('home_link','options'); ?>"
          ><h2 class="header__logo"><?php the_field('logo','options'); ?></h2></a
        >
        <ul class="menu">
          <li class="menu__item">
            <a class="menu__item-link" href="<?php the_field('home_link','options'); ?>">Главная</a>
          </li>
          <li class="menu__item">
            <a class="menu__item-link" href="<?php the_field('home_link','options'); ?>/posts">Статьи</a>
          </li>
          <li class="menu__item menu__item-subwrap">
            <a class="menu__item-link" href="<?php the_field('home_link','options'); ?>/sites">Создание сайта</a>
            <ul class="submenu">
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/corporation">Корпоративный сайт</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/landing-page">Landing Page</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/magazine">Интернет-магазин</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/web-portal">Веб-портал</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/individual">Индивидуально</a>
              </li>
            </ul>
          </li>
          <li class="menu__item menu__item-subwrap">
            <a class="menu__item-link" href="<?php the_field('home_link','options'); ?>/sites">Услуги</a>
            <ul class="submenu">
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/sites">Вёрстка</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/sites">Дизайн UI|UX</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/contact">Поддержка сайта</a>
              </li>
              <li class="submenu__item">
                <a class="submenu__item-link" href="<?php the_field('home_link','options'); ?>/seo">Контент-маркетинг</a>
              </li>
            </ul>
          </li>
          <li class="menu__item menu__contact">
            <a class="menu__item-link" href="<?php the_field('home_link','options'); ?>/contact">Контакты</a>
          </li>
        </ul>
        <svg
          class="ham hamRotate ham4"
          id="navToggle"
          viewBox="0 0 110 100"
          width="70"
        >
          <path
            class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"
          />
          <path class="line middle" d="m 70,50 h -40" />
          <path
            class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"
          />
        </svg>
      </div>
    </header>