<?php
/*
  * Template name: Home
  * */
get_header(); ?>

<div class="conteiner">
    <div id="fav-works" class="works">
<?php
$custom_query = new WP_Query( array( 'post_type' => 'works','posts_per_page' => 20  ) );
if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

    <div class="teaser">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($post->ID,'works-thumba') ?>
                            <div class="teaser_info">
                                <div class="teaser_info-in">
                                    <div class="title"><?php the_title(); ?></div>
                                    <div class="text">
       <?php $terms = get_the_terms( $post->ID, 'works-category' );if( $terms ){$term = array_shift( $terms );echo $term->name;}?>
                                    </div>
                                </div>
                            </div>
                            <div class="teaser_over"></div>
                        </a>
                    </div>
<?php endwhile; endif; ?>
                 
</div>   


<?php get_footer();

