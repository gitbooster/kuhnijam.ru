<?php 
/**
 * Template Name: Template catalog
 */
  get_header(); ?>

<!-- Каталог -->
    <section id="catalog" class="padding">
        <div class="title"><h2>Каталог!</h2></div>
        <div class="wrap">
            <ul class="nav">
                <li><a href="" data-id="1" class="active">Кухни от 15 000 до 80 000</a></li>
                <li><a href="" data-id="2">Кухни от 80 000 до 150 000</a></li>
                <li><a href="" data-id="3">Авторские кухни</a></li>
            </ul>
            <hr>
            <div class="catalog">
                 <ul data-id="1" class="active">
                    <?php $custom_query = new WP_Query( array( 'post_type' => 'catalog','posts_per_page' => -1  ) );
                    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <?php $post_id = get_the_ID();?>
                        <li data-id="<?php echo $post_id ?>">
                            <?php echo get_the_post_thumbnail($post->ID,'catalog-thumba') ?>

                            <div class="bg">
                                <div class="name">
                                    <div>
                                        <h3><?php the_title(); ?></h3>
                                        <hr>
                                        <p>кухня</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
                    
                <ul data-id="2">
                    <div class="content active" data-id="1">
                        <li data-id="1">
                            <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1.jpg" alt="" />
                            <div class="bg">
                                <div class="name">
                                    <div>
                                        <h3>Эстетика</h3>
                                        <hr>
                                        <p>кухня</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                    </div>
                    
                  
                </ul>
                <ul data-id="3">
                    <div class="content active" data-id="1">
                        <li data-id="1">
                            <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1.jpg" alt="" />
                            <div class="bg">
                                <div class="name">
                                    <div>
                                        <h3>Эстетика</h3>
                                        <hr>
                                        <p>кухня</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                </ul>

                 <div class="pagination">
                       
                        <?php echo get_previous_posts_link(__('<div class="prev">></div>')); ?>
                            <?php _e('page','aletheme'); ?> <?php echo $paged; ?> 
                            <?php _e('of','aletheme'); ?>
                            <?php echo $wp_query->max_num_pages; ?>
                        <?php echo get_next_posts_link(__('<div class="next"><</div>')); ?>
                </div>

            </div>
        </div>
    </section>
    
    <!-- Форма захвата -->
    <section id="lead-form">
        <div class="wrap">
            <h2>Бесплатный вызов дизайнера-замерщика</h2>
            <hr>
            <p>Оставте заявку на замер и узнайте точную цену кухни</p>
            <form>
                <input type="text" name="name" placeholder="Имя" class="required" >
                <input type="text" name="phone" placeholder="Номер телефона" class="required" >
                <input type="hidden" name="ordername" value="Бесплатный вызов дизайнера-замерщика" >
                <label><input type="submit" value="Отправить" ></label>
            </form>
        </div>
    </section>


    
    <!-- Контакты -->
    <!-- <section id="contacts">
        <div class="wrap">
            <h2>Наши контакты</h2>
            <hr>
            <div class="cols">
                <div class="col1">
                    <div class="item">
                        <p>
                            <img src="<?php echo get_template_directory_uri();?>/img/contacts/1.jpg" alt="" />
                            <span>Адрес:</span>
                        </p>
                        <p>г. Набережные челны,<br> Магистральная, дом 1</p>
                    </div>
                    <div class="item">
                        <p>
                            <img src="<?php echo get_template_directory_uri();?>/img/contacts/2.jpg" alt="" />
                            <span>График работы:</span>
                        </p>
                        <p>пн-пт 9-00 до 18-00,<br> сб 10-00 до 15-00</p>
                    </div>
                    <div class="item">
                        <p>
                            <img src="<?php echo get_template_directory_uri();?>/img/contacts/3.jpg" alt="" />
                            <span>Телефон:</span>
                        </p>
                        <p>8-917-884-28-26,<br> 8 (8552) 36-34-04</p>
                    </div>
                    <div class="item">
                        <p>
                            <img src="<?php echo get_template_directory_uri();?>/img/contacts/4.jpg" alt="" />
                            <span>E-mail:</span>
                        </p>
                        <p>domstroi116@inbox.ru</p>
                    </div>
                </div>
                <div class="col2">
                    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=VVIt2fWL_N3trIZsRGpGm0_Mnxv5N9NE&width=100%&height=250&lang=ru_RU&sourceType=constructor"></script>
                </div>
            </div>
        </div>
    </section> -->
    
    <!-- Футер -->
    <footer class="bnone">
        <div class="wrap"><br>
            <!-- <div class="copyright">Copyright © 2016  Кухни- Дежем</div> -->
            <!-- <div class="studio"><a href="http://landingpage.top" target="_blank">Разработка</a></div>           -->
        </div>
    </footer>
    
    <!-- Всп. формы -->
    <div class="pop-ups" id="pop-up">
        <div class="b-close"></div>
        <h3></h3>
        <hr>
        <p></p>
        <form>
            <input type="text" name="name" placeholder="Имя" class="required" >
            <input type="text" name="phone" placeholder="Номер телефона" class="required" >
            <div class="upload">
                <div class="upload-file">
                     <label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                        <input type="file" name="upload_file" id="upload-file">
                        <span>Выбрать фото</span>
                    </label>
                </div>
                <div class="result">фото не выбрано...</div>
                <div class="desc">Выберите картинку в формате .jpg или .png, размером не<br> более 5 мегабайт и нажмите отпраить.</div>
            </div>
            <input type="hidden" name="ordername" class="ordername" value="">
            <label class="submit"><input type="submit" value="Отправить"></label>
        </form>
    </div>
    
    <div class="pop-ups" id="pop-up-catalog">
        <div class="b-close"></div>
        <div class="arrows">
            <a class="prev"></a>
            <a class="next"></a>
        </div>
         <ul data-id="1">

        <?php $custom_query = new WP_Query( array( 'post_type' => 'catalog','posts_per_page' => 6  ) );
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
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
           <?php endwhile; endif; ?> 
        </ul>
           
    </div>
    
    <div class="pop-ups" id="pop-up-success">
        <div class="b-close"></div>
        <p></p>
    </div>


<?php get_footer();