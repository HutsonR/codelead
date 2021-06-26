<?php get_template_part( 'template-parts/header/title-header' ); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
   <div class="work-single">
      <div class="single-post_header">
         <div class="container">
            <div class="single-post_header-title">
               <h1><?php the_title(); ?></h1>
               <p><?php the_field('work_desc'); ?></p>
            </div>
            <div class="single-post_main-img des">
               <img src="<?php
               $image = get_field('work_img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "$image";	?>" alt="<?php the_title(); ?>">
            </div>
            <div class="single-post_main-img mob">
               <img src="<?php
               $image = get_field('work_img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "$image";	?>" alt="<?php the_title(); ?>">
            </div>
         </div>
      </div>
      
      <div class="container work-wrapper">
         <div class="work-single__left">
            <?php if (get_field('work_video')): ?>
               <h2>Видео страниц</h2>
               <div class="work-single__video">
                  <iframe width="560" height="315" src="<?php the_field('work_video'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            <?php endif; ?>
            <h2>Фото страниц</h2>
            <p>Нажмите на изображение, чтобы открыть во весь размер</p>
            <div class="work-single__foto des">
               <?php 
               $images = get_field('work_foto');
               foreach ( $images as $image ) {
                  ?>
                  <a data-fancybox="gallery" href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php the_title(); ?>"></a>
                  <?php
               } ?>
            </div>
			<div class="work-single__foto mob">
               <?php 
               $images = get_field('work_foto');
               foreach ( $images as $image ) {
                  ?>
                  <a data-fancybox="gallery-mob" href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php the_title(); ?>"></a>
                  <?php
               } ?>
            </div>
         </div>
         <div class="work-single__right">
            <div class="work-single__right-item">
               <span>Тип разработки:</span><span> <?php the_field('work_type'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Вёрстка:</span><span> <?php the_field('work_develop'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Дизайн:</span><span> <?php the_field('work_design'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Сроки создания:</span><span> <?php the_field('work_time'); ?> рабочих дней</span>
            </div>
            <div class="work-single__right-item">
               <span>Ссылка на страницу:</span><span> <a style="text-decoration: underline" target="_blank" href="<?php if (get_field('work_link')): ?>
                <?php the_field('work_link'); ?>
                <?php else: ?>
                  https://codelead.ru/error-404/
                <?php endif; ?>">Нажмите сюда</a></span>
            </div>
         </div>
      </div>
   </div>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php get_footer(); ?>