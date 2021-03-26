<?php //Template Name: Разработка ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <meta name="format-detection" content="telephone=no" />
    <title>Hutson веб-разработчик</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="#" type="image/png" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
	
		<main class="error developping" id="container">
      <div class="content">
        <h2 class="thanks-title">Разработка</h2>
        <h4>Страница находится в разработке</h4>
        <p>Можете покинуть эту страницу и заглянуть позже. Нажмите кнопку ниже, чтобы перейти на главную страницу</p>
        <a href="<?php the_field('home_link','options'); ?>">На главную страницу</a>
      </div>
		</main>
<?php get_footer(); ?>