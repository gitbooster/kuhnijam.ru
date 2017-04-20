
<?php
get_header();  global $query_string; query_posts($query_string.'&post_type=works&posts_per_page=-1'); ?>

<div class="conteiner">
            <div class="works_bar">
                <button id="works_bar_toggle" class="menu_toggle" title="Выбрать категорию"><i></i></button>
                            <h1 class="works_bar_title"><b><?php $terms = get_the_terms( $post->ID, 'works-category' );if( $terms ){$term = array_shift( $terms );echo $term->name;}?></b></h1>
                <div class="works_menu_pane">
                    <div class="works_menu_list">
                        <nav class="works_menu_c" title="Категории">
                          <a href="<?php echo home_url(); ?>/works" class="active"><?php _e('Все', 'aletheme')?></a>
                            <?php $args = array(
                                'type'                     => 'works',
                                'child_of'                 => 0,
                                'parent'                   => '',
                                'orderby'                  => 'name',
                                'order'                    => 'ASC',
                                'hide_empty'               => 1,
                                'hierarchical'             => 1,
                                'exclude'                  => '',
                                'include'                  => '',
                                'number'                   => '',
                                'taxonomy'                 => 'works-category',
                                'pad_counts'               => false );

                            $categories = get_categories( $args );

                            foreach($categories as $cat){
                                echo '<a href="'.home_url().'/works-category/'.$cat->slug.'">'.$cat->name.'</a>';
                            }
                            ?>
                            
                        </nav>
                        <nav class="works_menu_y">
                        
                        </nav>
                    </div>
                </div>
            </div>
                <div id="fav-works" class="works">
    <div id="fav-works" class="works">
<?php global $query_string; query_posts($query_string.'&posts_per_page=-1');?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="teaser">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail($post->ID,'works-thumba') ?>
                            <div class="teaser_info">
                                <div class="teaser_info-in">
                                    <div class="title"><?php the_title(); ?></div>
                                    <div class="text">
                <?php $args = array(
                    'type'                     => 'works',
                    'child_of'                 => 0,
                    'parent'                   => '',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 1,
                    'hierarchical'             => 1,
                    'exclude'                  => '',
                    'include'                  => '',
                    'number'                   => '1',
                    'taxonomy'                 => 'works-category',
                    'pad_counts'               => false );

                $categories = get_categories( $args );

                foreach($categories as $cat){
                    echo $cat->name ;
                }
                ?>

                                    </div>
                                </div>
                            </div>
                            <div class="teaser_over"></div>
                        </a>
                    </div>
<?php endwhile; endif; ?>
                 
</div>   


<?php get_footer();

