<?php get_header(); ?>
<link href="<?php echo get_template_directory_uri() ?>/css/style-post.css" rel="stylesheet">

<div class="post-menu-overlay">
	<!-- .... -->
</div>
<div class="post-menu">
   <img class="close" src="<?php echo get_template_directory_uri() ?>/img/close-min.svg" alt="close">
   <div class="post-right-popular">
      <h1>Популярные статьи</h1>
      <?php $populargb = new WP_Query('showposts=4&meta_key=post_views_count&orderby=meta_value_num' );
      while ( $populargb->have_posts() ) {
         $populargb->the_post(); ?>
         <div class="post-content-right">
            <a href="<?php echo get_the_permalink(); ?>">
               <!-- <?php
               $image = get_field('post-img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "<img src='$image' alt='img'>";	?> -->
               <div class="post-content_text">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
               </div>
               <div class="post-content_bottom">
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
               </div>
            </a>
         </div>
      <?php } ?>
   </div>
</div>
<div class="posts">
   <div class="posts-header">
      <div class="container">
         <a href="/posts" class="posts-header_title"><i class="fas fa-list-alt"></i> Статьи</a>
         <a href="https://codelead.ru/posts/animations/" class="posts-header_title"><i class="fas fa-fire"></i> Красивые анимации</a>
      </div>
   </div>
   <div class="container">
	 <h2 class="single-cat-desc">Сейчас отображаются статьи только выбранной рубрики: <?php single_cat_title('<span class="cat-title">', '</span>') ?><br><a class="all-posts-link" href="https://codelead.ru/posts/">Нажмите сюда, чтобы смотреть все статьи</a></h2>
      <div class="posts-wrapper">
         <div class="post-right mobile">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <p class="post-menu-btn">Популярные статьи</p>
         </div>
         <div class="post-left">
            <h1 class="post-left__title"><i class="fas fa-fire-alt"></i> Рубрика: <?php single_cat_title() ?></h1> 
				<?php if ( have_posts() ) : ?>
				<?php
				// Start the Loop.
				while ( have_posts() ) :

					the_post(); ?>
					 <div class="post-content">
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
                  <h2 class="post-content_title"><?php the_title(); ?></h2>
                  <?php
                  $image = get_field('post-img');
                  $image = $image['sizes']['medium_large'];
                  if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
                  echo "<img class='main-post_img' src='$image' alt='img'>";	?>
                  <h2 class="category <?php echo get_field('kategoriya')['value']; ?>">
                     <?php
                     $categories = get_the_category($post_id);
                     if($categories){
                        foreach($categories as $category) {
                           echo '<a href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                        }
                     }
                     ?>
                  </h2>
                  <div class="post-content_text">
                     <p><?php the_content(); ?></p>
                  </div>
                  <a class="post-content-btn" href="<?php echo get_the_permalink(); ?>">Читать дальше <img src="<?php echo get_template_directory_uri() ?>/img/right-arrow-min.svg" alt="arrow"></a>
                  <div class="post-content_bottom">
                     
                  </div>
               </div>

					<?php // End the loop.
				endwhile; ?>
				</div>
         <div class="post-right desc">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
             <div class="post-left-popular">
            <h1>Популярные статьи</h1>
            <?php $populargb = new WP_Query('showposts=10&meta_key=post_views_count&orderby=meta_value_num' );
            while ( $populargb->have_posts() ) {
               $populargb->the_post(); ?>
               <div class="post-content-right">
                  <a href="<?php echo get_the_permalink(); ?>">
                     <div class="post-content_text">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                     </div>
                     <div class="post-content_bottom">
                        <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
                     </div>
                  </a>
               </div>
            <?php } ?>
         </div>
         </div>
      </div>
   </div>
</div>
			
			
<?php
else :
   echo("Пусто");

endif;

get_footer();
