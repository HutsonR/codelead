<?php get_header(); ?>
<?php while ( have_posts() ): the_post(); ?>
   <div class="posts">
      <div class="container">
         <div class="single-post">
            <?php
            $image = get_field('post-img');
            $image = $image['sizes']['medium_large'];
            if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
            echo "<img src='$image' alt='img'>";	?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php the_field('single-content'); ?>
         </div>
      </div>
   </div>
<?php endwhile; ?>
<?php get_footer(); ?>