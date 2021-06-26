<?php //Template Name: Работы ?>
<?php get_template_part( 'template-parts/header/title-header' ); ?>
	<main class="work_all">
		<div class="stars-container_work">
		<img src="https://hutsonr.ru/wp-content/uploads/2020/09/13325.jpg" alt="site">
	</div>
		<div class="container">
		<h1>Hover on the cards.</h1>
		<div class="wrapper">

			<?php  $query = new WP_Query( 'post_type=work' ); ?>
			<?php while ( $query->have_posts()):$query->the_post(); ?>
			<div class="card" style="background-image: url('<?php
               $image = get_field('work_img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "$image";	?>'); background-position: center;">
				<div class="card__content">
					<a target="_blank" href="<?php echo get_the_permalink(); ?>">
					<div class="card__content--description">
					<h3 class="roll-up">
						<span><?php the_field('work_title'); ?></span>
						<span><?php the_field('work_title'); ?></span>
					</h3>
					<p class="text-reveal">
						<span>
							<span><?php the_field('work_text'); ?></span>
						</span>
						<span>
							<span><span><?php the_field('work_text'); ?></span></span>
						</span>
					</p>
					</div>
					</a>
				</div>
				<a class="work-single_btn" href="<?php echo get_the_permalink(); ?>">Посмотреть кейс</a>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		</div>
	</main>
<?php get_footer(); ?>