<?php //Template Name: posts-category ?>
<?php get_header(); ?>
<meta property="og:title" content="Roman Tuzov - Разработка и дизайн сайтов. Создайте свой личный сайт">
<meta property="og:description" content="Разрабатываю сайты, интернет магазины более 4 лет. Создам лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
<meta property="og:url" content="https://hutsonr.ru/">
<meta property="og:locale" content="ru_RU">
<meta property="og:image" content="https://hutsonr.ru/wp-content/uploads/2020/06/screenshot-11.png">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">
<title>Roman Tuzov - Разработка и дизайн сайтов. Создайте свой личный сайт</title>
<meta name="description" content="Роман Тузов. Разрабатываю сайты, интернет магазины более 4 лет. Создам лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
<header id="header" class="header" style="background: rgba(3, 25, 42, 0.95);">
   <a href="<?php the_field('home_link','options'); ?>" title="" class="header__name"
   ><h2>Roman Tuzov</h2></a
   >
   <div class="header-center" style="position: relative; left: auto !important; transform: translateX(0) !important;">
   <div class="night-mode">
      <input class="l" type="checkbox" id="switch-1">
   </div>
   <a href="<?php the_field('home_link','options'); ?>" title=""><h2>Главная</h2></a>
   <a href="/posts" title=""><h2>Статьи</h2></a>
   </div>
</header>
<div class="posts">
   <div class="container">
   <h1>Статьи</h1>
   <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
      <div class="posts-wrapper">
         <div class="post-left">
            <?php
            // 1 значение по умолчанию
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

            $the_query = new WP_Query( array(
               'posts_per_page' => 12,
               'paged'          => $paged,
               'category__in'   => games
            ) );
            
            // цикл вывода полученных записей
            while( $the_query->have_posts() ){
               $the_query->the_post();
               ?>
            <div class="post-content">
               <h2 class="category <?php echo get_field('kategoriya')['value']; ?>">
                  <?php echo get_field('kategoriya')['label']; ?>
               </h2>
               <?php
               $image = get_field('post-img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "<img src='$image' alt='img'>";	?>
               <div class="post-content_text">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
               </div>
               <a class="post-content-btn" href="<?php echo get_the_permalink(); ?>">Читать дальше <img src="<?php echo get_template_directory_uri() ?>/img/right-arrow-min.svg" alt=""></a>
               <div class="post-content_bottom">
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt=""><?php the_time('F jS, Y'); ?></p>
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
         <div class="post-right">
         <?php
         $args = array(
         'show_option_all'    => '',
         'orderby'            => 'count',
         'order'              => 'ASC',
         'separator'          => '<br />',
         'style'              => 'list',
         'show_count'         => 1,
         'hide_empty'         => 1,
         'use_desc_for_title' => 1,
         'child_of'           => 0,
         'feed'               => '',
         'feed_type'          => '',
         'feed_image'         => '',
         'exclude'            => '',
         'exclude_tree'       => '',
         'include'            => '',
         'hierarchical'       => 1,
         'title_li'           => __( 'Categories' ),
         'show_option_none'   => __( '' ),
         'number'             => null,
         'echo'               => 1,
         'depth'              => 0,
         'current_category'   => 0,
         'pad_counts'         => 0,
         'taxonomy'           => 'category',
         'walker'             => null
         );
         wp_list_categories( $args );


      ?>
            <div class="post-right-popular">
               <h1>Популярные статьи</h1>
               <?php $populargb = new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
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
                           <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt=""><?php the_time('F jS, Y'); ?></p>
                        </div>
                     </a>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>