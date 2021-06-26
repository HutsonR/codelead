<?php get_template_part( 'template-parts/header/title-header' ); ?>
<link href="<?php echo get_template_directory_uri() ?>/css/style-post.css" rel="stylesheet">
<?php while ( have_posts() ): the_post(); ?>
   <div class="posts single">
      <div class="posts-header">
         <div class="container">
            <a href="/posts" class="posts-header_title"><i class="fas fa-list-alt"></i> Статьи</a>
            <a href="https://codelead.ru/posts/animations/" class="posts-header_title"><i class="fas fa-fire"></i> Красивые анимации</a>
         </div>
      </div>
      <div class="container">
         <div class="way">
            <img src="<?php echo get_template_directory_uri() ?>/img/white-home.svg" alt="arrow">
            <a class="home" href="<?php the_field('home_link','options'); ?>">Главная</a>
            <img src="<?php echo get_template_directory_uri() ?>/img/right-arrow.svg" alt="arrow">
            <a href="<?php the_field('home_link','options'); ?>posts">Статьи</a>
            <img class="way-mob" src="<?php echo get_template_directory_uri() ?>/img/right-arrow.svg" alt="arrow">
            <p class="way-mob"><?php the_title(); ?></p>
         </div>
      </div>
      <div class="post__content-wrapper">
         <div class="post__content-left">
            <div class="single-post_header">
               <div class="container">
                  <div class="single-post_header-title">
                     <h1><?php the_title(); ?></h1>
                     <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt=""><?php the_time('F jS, Y'); ?></p>
                  </div>
                  <div class="single-post_main-img des">
                     <?php
                     $image = get_field('post-img');
                     $image = $image['sizes']['large'];
                     if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
                     echo "<img src='$image' alt='img'>";?>
                  </div>
                  <div class="single-post_main-img mob">
                     <?php
                     $image = get_field('post-img');
                     $image = $image['sizes']['medium_large'];
                     if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
                     echo "<img src='$image' alt='img'>";?>
                  </div>
                  <h2 class="category single <?php echo get_field('kategoriya')['value']; ?>">
                     <?php
                        $categories = get_the_category($post_id);
                        if($categories){
                           foreach($categories as $category) {
                              echo '<a href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                           }
                        }
                     ?>
                     </h2>
               </div>
            </div>
            <div class="container">
               <div class="single-post">
                  <?php if (get_field("kratkoe_soderzhanie")): ?>
                  <h2>Краткое содержание</h2>
                  <div class="low-content">
                     <ul id="scroll_desk">
                        <?php while ( have_rows('low-content-repeat') ) : the_row(); ?>
                        <li><a href="#<?php the_sub_field('low-content-link'); ?>"><?php the_sub_field('low-content-title'); ?></a></li>
                        <?php endwhile; ?>
                     </ul>
                  </div>
                  <?php endif; ?>
                  <div class="single-post_content">
                     <?php the_field('single-content'); ?>
                  </div>
                  <h2 class="share title-recom">Рекомендуем по теме</h2>
                  <?php
                  // если это старица отдельной записи
                  if( is_singular() ){
                     global $post;

                     $taxname = 'category'; // таксономия с которой будем работать

                     // получим ID всех рубрик поста
                     $post_terms = wp_get_object_terms( $post->ID, $taxname, array('fields'=>'ids') );
                     ?>
                     <div class="posts-recommeneded">
                        <?php
                        $myposts = get_posts( array(
                           'posts_per_page' => 5,
                           $taxname   => $post_terms,
                           'exclude'  => $post->ID, // исключим текущ. пост
                        ) );

                        // выводим посты
                        foreach( $myposts as $post ){ setup_postdata($post);
                           ?>
                           <div class="posts-recommeneded-content">
                              <p class="posts-recommeneded__time">
                                 <?php the_time('F jS, Y'); ?>
                              </p>
                              <a href="<?php echo get_the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                           </div>
                           <?php
                        }
                        wp_reset_postdata();
                        ?>   
                        </div>
                     <?php
                  }
                  ?>
                  <script src="https://yastatic.net/share2/share.js"></script>
                  <h2 class="share">Поделиться статьёй</h2>
                  <div class="ya-share2" data-curtain data-shape="round" data-limit="5" data-services="collections,vkontakte,facebook,odnoklassniki,telegram,whatsapp"></div>
                  <h2 class="share">Написать комментарий</h2>
                  <?php comments_template(); ?>
                  <!-- <div id="anycomment-app"></div>
                  <script>
                  AnyComment = window.AnyComment || []; AnyComment.Comments = [];
                  AnyComment.Comments.push({
                     "root": "anycomment-app",
                     "app_id": 2518,
                     "language": "ru"
                  })
                  var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
                  s.src = "https://widget.anycomment.io/comment/embed.js";
                  var sa = document.getElementsByTagName("script")[0];
                  sa.parentNode.insertBefore(s, s.nextSibling);
                  </script> 
                  <div class="posts-recommeneded-content">
                              <a href="<?php echo get_the_permalink(); ?>">
                                <?php
                                 $image = get_field('post-img');
                                 $image = $image['sizes']['medium_large'];
                                 if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
                                 echo "<img class='main-post_img' src='$image' alt='img'>";	?>
                                 <div class="post-content_text">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="post-content_text-p">
                                       <?php the_excerpt(); ?>
                                    </div>
                                 </div>
                                 <div class="post-content_bottom">
                                    <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
                                 </div>
                              </a>
                           </div>
                              -->
               </div>
            </div>
         </div>
         <div class="post__content-right">
            <div class="post-left-popular">
            <h2>Популярные статьи</h2>
            <?php $populargb = new WP_Query('showposts=12&meta_key=post_views_count&orderby=meta_value_num' );
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
   
   <?php setPostViews(get_the_ID()); ?>
<?php endwhile; ?>
<?php get_footer(); ?>