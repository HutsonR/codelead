<?php //Template Name: posts-anim ?>
<?php get_template_part( 'template-parts/header/title-header' ); ?>
<link href="<?php echo get_template_directory_uri() ?>/css/style-post.css" rel="stylesheet">
<div class="post-menu-overlay">
   <!-- .... -->
</div>
<div class="posts">
   <div class="posts-header">
      <div class="container">
         <a href="/posts" class="posts-header_title"><i class="fas fa-list-alt"></i> Статьи</a>
         <a href="https://codelead.ru/posts/animations/" class="posts-header_title"><i class="fas fa-fire"></i> Красивые анимации</a>
      </div>
   </div>
   <div class="container">
      <div class="posts-wrapper posts-wrapper__anim">
         <h1 class="post-left__title"><i class="fas fa-fire-alt"></i> Крутые анимации</h1>
         <div class="post-left post-anim">
            <?php
            // 1 значение по умолчанию
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

            $the_query = new WP_Query( array(
               'posts_per_page' => 12,
               'paged'          => $paged,
               'post_type'      => 'anim'
            ) );
            
            // цикл вывода полученных записей
            while( $the_query->have_posts() ){
               $the_query->the_post();
               ?>
            <div class="anim-content">
               <iframe src="https://www.youtube.com/embed/<?php the_field('embed-code'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <div class="anim-content_text">
                  <h2><?php the_title(); ?></h2>
                  <div class="anim-content-text-data"><?php the_field('anim-desc'); ?></div>
                  <a class="anim-btn" target="_blank" href="<?php the_field('anim-codepen'); ?>">Посмотреть на CodePen <i class="fab fa-codepen"></i></a>
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
      </div>
   </div>
</div>

<?php get_footer(); ?>