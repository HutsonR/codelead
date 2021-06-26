<?php //Template Name: posts ?>
<?php get_template_part( 'template-parts/header/title-header' ); ?>
<link href="<?php echo get_template_directory_uri() ?>/css/style-post.css" rel="stylesheet">
<div class="post-menu-overlay">
   <!-- .... -->
</div>
<div class="post-menu">
   <img class="close" src="<?php echo get_template_directory_uri() ?>/img/close-min.svg" alt="close">
   <!-- <a class="useful-app" href="https://hutsonr.ru/in-process">Полезные приложения</a> -->
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
    <!-- <a class="theme-button" id="theme-button">Сменить тему</a> -->
      <div class="posts-wrapper">
         <div class="post-right mobile">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <p class="post-menu-btn">Популярные статьи</p>
            <?php echo do_shortcode('[ivory-search id="461" title="Default Search Form"]'); ?>
         </div>
         <div class="post-left">
            <h1 class="post-left__title"><i class="fas fa-fire-alt"></i> Новости</h1>
            <?php
            // 1 значение по умолчанию
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

            $the_query = new WP_Query( array(
               'posts_per_page' => 15,
               'paged'          => $paged,
            ) );
            
            // цикл вывода полученных записей
            while( $the_query->have_posts() ){
               $the_query->the_post();
               ?>
            <div class="post-content">
               <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
               <a href="<?php echo get_the_permalink(); ?>"><h2 class="post-content_title"><?php the_title(); ?></h2></a>
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
            <?php 
            } 
            wp_reset_postdata();

            // пагинация для произвольного запроса
            $big = 999999999; // уникальное число ?>
            <div class="pag-links">
               <?php
               echo paginate_links( array(
                  'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'current' => max( 1, get_query_var('paged') ),
                  'total'   => $the_query->max_num_pages
               ) );
               ?>
            </div>
         </div>
         <div class="post-right desc">
            
            <?php echo do_shortcode('[ivory-search id="461" title="Default Search Form"]'); ?>
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <div class="post-left-popular">
            <h2>Популярные статьи</h2>
            <?php $populargb = new WP_Query('showposts=10&meta_key=post_views_count&orderby=meta_value_num' );
            while ( $populargb->have_posts() ) {
               $populargb->the_post(); ?>
               <div class="post-content-right">
                  <a href="<?php echo get_the_permalink(); ?>">
                     <div class="post-content_text">
                        <h3><?php the_title(); ?></h3>
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

<?php get_footer(); ?>