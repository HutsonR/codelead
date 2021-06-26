<?php //Template Name: Спасибо ?>
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
    <title>Ваше письмо успешно отправлено - CodeLead</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="#" type="image/png" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
	
		<main class="error" id="container">
      <div class="content">
        <h2 class="thanks-title">Спасибо</h2>
        <h4>Ваше письмо успешно отправлено! :)</h4>
        <p>Через <span class="time-left"></span> секунды вы будете автоматически перенаправлены на главную страницу, если этого не случилось, то нажмите 			кнопку ниже</p>
        <a href="<?php the_field('home_link','options'); ?>">На главную страницу</a>
      </div>
		</main>
<script>
	var delay = 3,
    output = document.querySelector('.time-left'),
    timer = setInterval(function() {
        output.textContent = --delay;
        if (!delay) {
            clearInterval(timer);
            window.location.href = "<?php the_field('home_link','options'); ?>";
        }
    }, 1000);
output.textContent = delay;
</script>
<?php get_footer(); ?>