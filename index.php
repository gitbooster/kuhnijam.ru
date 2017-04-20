<? get_header(); ?>
<!-- Первый экран -->
<section id="firstpage">
   <div class="wrap">
      <h1>Кухни на заказ от производителя</h1>
      <div class="desc">Итальянская кухня за 64 900 рублей</div>
      <div class="dynamic-title">
         <span class="item">Гарантия 5 лет на любы кухни</span>
         <span class="item">Рассрочка 0%</span>
      </div>
   </div>
   <div id="container" class="container">
      <ul id="scene" class="scene">
         <!-- <li class="layer" data-depth="0.00"><img style='' src="pic1.jpg"></li> -->
         <li class="layer" data-depth="1.20">
            <img style='' src="<?php echo get_template_directory_uri();?>/img/prx-2.png">
         </li>
         <li class="layer" data-depth="-1.30">
            <img style='' src="<?php echo get_template_directory_uri();?>/img/prx-3.png">
         </li>
         <li class="layer" data-depth="0.50">
            <img style='' src="<?php echo get_template_directory_uri();?>/img/prx-4.png">
         </li>
      </ul>
   </div>
</section>
<!-- Каталог -->
<section id="catalog">
   <div class="wrap">
      <ul class="nav">
         <li><a href="" data-id="1" class="active">Кухни от 15 000 до 80 000</a></li>
         <li><a href="" data-id="2">Кухни от 80 000 до 150 000</a></li>
         <li><a href="" data-id="3">Авторские кухни</a></li>
      </ul>
      <hr>
      <div class="catalog">
         <ul data-id="1" class="active">
            <?php
               $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 2
               )
               )
               );
               ?>
            <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php $post_id = get_the_ID();?>
            <li data-id="<?php echo $post_id ?>">
               <?php echo get_the_post_thumbnail($post->ID,'catalog-thumba') ?>
               <div class="bg">
                  <div class="name">
                     <div>
                        <h3><?php the_title(); ?></h3>
                        <hr>
                        <p>кухня <?php $terms = get_the_terms( $post->ID, 'catalog-category' );if( $terms ){$term = array_shift( $terms );echo $term->slug;}?></p>
                     </div>
                  </div>
               </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
         </ul>
         <ul data-id="2">
            <?php
               $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 3
               )
               )
               );
               ?>
            <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php $post_id = get_the_ID();?>
            <li data-id="<?php echo $post_id ?>">
               <?php echo get_the_post_thumbnail($post->ID,'catalog-thumba') ?>
               <div class="bg">
                  <div class="name">
                     <div>
                        <h3><?php the_title(); ?></h3>
                        <hr>
                        <p>кухня <?php $terms = get_the_terms( $post->ID, 'catalog-category' );if( $terms ){$term = array_shift( $terms );echo $term->slug;}?></p>
                     </div>
                  </div>
               </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
         </ul>
         <ul data-id="3">
            <?php
               $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 4
               )
               )
               );
               ?>
            <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php $post_id = get_the_ID();?>
            <li data-id="<?php echo $post_id ?>">
               <?php echo get_the_post_thumbnail($post->ID,'catalog-thumba') ?>
               <div class="bg">
                  <div class="name">
                     <div>
                        <h3><?php the_title(); ?></h3>
                        <hr>
                        <p>кухня <?php $terms = get_the_terms( $post->ID, 'catalog-category' );if( $terms ){$term = array_shift( $terms );echo $term->slug;}?></p>
                     </div>
                  </div>
               </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
         </ul>
      </div>
      <a href="/catalog" class="btn">Весь каталог</a>
   </div>
</section>
<?php include"index_all_blocks.php" ?>
<div class="pop-ups" id="pop-up-catalog">
   <div class="b-close"></div>
   <div class="arrows">
      <a class="prev"></a>
      <a class="next"></a>
   </div>
   <ul data-id="1">
    <?php
             $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 2
            )));?>
       <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
      <?php $post_id = get_the_ID();?>
      <li data-id="<?php echo $post_id ?>">
         <div class="col1">
            <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
         </div>
         <div class="col2">
            <h3><?php the_title(); ?></h3>
            <div class="wrapper">
               <p><span>Описание</span>
                  <?php  if(ale_get_meta('description_kuhnea')){echo ale_get_meta('description_kuhnea');} ?>
               </p>
               <p><span>Материал</span>
                  <?php  if(ale_get_meta('material')){echo ale_get_meta('material');} ?>
               </p>
               <p><span>Фурнитура</span>
                  <?php  if(ale_get_meta('furnitura')){echo ale_get_meta('furnitura');} ?>
               </p>
               <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
            </div>
         </div>
      </li>
     <?php endwhile; wp_reset_query(); ?>
   </ul>
   <ul data-id="2">
      <?php
             $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 3
            )));?>
       <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
      <?php $post_id = get_the_ID();?>
      <li data-id="<?php echo $post_id ?>">
         <div class="col1">
            <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
         </div>
         <div class="col2">
            <h3><?php the_title(); ?></h3>
            <div class="wrapper">
               <p><span>Описание</span>
                  <?php  if(ale_get_meta('description_kuhnea')){echo ale_get_meta('description_kuhnea');} ?>
               </p>
               <p><span>Материал</span>
                  <?php  if(ale_get_meta('material')){echo ale_get_meta('material');} ?>
               </p>
               <p><span>Фурнитура</span>
                  <?php  if(ale_get_meta('furnitura')){echo ale_get_meta('furnitura');} ?>
               </p>
               <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
            </div>
         </div>
      </li>
     <?php endwhile; wp_reset_query(); ?>
   </ul>
   <ul data-id="3">
      <?php
             $args = array(
               'post_type' => 'catalog',
               'orderby' => 'rand',
               'posts_per_page' => 6,
               'tax_query' => array(
               array(
               'taxonomy' => 'catalog-category',
               'field' => 'id',
               'terms' => 4
            )));?>
       <?php query_posts($args); ?>
            <?php while (have_posts()) : the_post(); ?>
      <?php $post_id = get_the_ID();?>
      <li data-id="<?php echo $post_id ?>">
         <div class="col1">
            <?php echo get_the_post_thumbnail($post->ID,'full'); ?>
         </div>
         <div class="col2">
            <h3><?php the_title(); ?></h3>
            <div class="wrapper">
               <p><span>Описание</span>
                  <?php  if(ale_get_meta('description_kuhnea')){echo ale_get_meta('description_kuhnea');} ?>
               </p>
               <p><span>Материал</span>
                  <?php  if(ale_get_meta('material')){echo ale_get_meta('material');} ?>
               </p>
               <p><span>Фурнитура</span>
                  <?php  if(ale_get_meta('furnitura')){echo ale_get_meta('furnitura');} ?>
               </p>
               <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
            </div>
         </div>
      </li>
     <?php endwhile; wp_reset_query(); ?>
   </ul>
</div>
<div class="pop-ups" id="pop-up-success">
   <div class="b-close"></div>
   <p></p>
</div>
<?php get_footer();