<?php get_header(); ?>
<div class="conteiner">
            <div id="view-work" class="view-work">
                <article class="work_content">
                    <div class="work_title">
                        <div class="prev_next">
                          
                            <?php next_post_link('%link'); ?>
                              <?php previous_post_link('%link'); ?> 
                        </div>

                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1 class="title"><?php the_title(); ?>-<?php $terms = get_the_terms( $post->ID, 'works-category' );if( $terms ){$term = array_shift( $terms );echo $term->name;}?></h1>
                        <nav class="breadcrumbs">
                            <span class="item"><a href="/works" title="Портфолио">Портфолио</a></span>
                            <span class="item"><?php $terms = get_the_terms( $post->ID, 'works-category' );if( $terms ){$term = array_shift( $terms );echo $term->name;}?></span>
                            <!-- <span class="item"><span>Futuland</span></span> -->
                        </nav>
                    </div>
                    <div class="work_media work_bg" style="background-image: url(' <?php  if(ale_get_meta('fileupload')){echo ale_get_meta('fileupload');} ?> ');">
                    <figure id="block-image-0" class="work_img">
                        <img src="<?php  if(ale_get_meta('fileupload')){echo ale_get_meta('fileupload');} ?>" alt="<?php the_title(); ?>">

                    </figure>
                    </div>

                    <?php endwhile;  endif;  ?>
                    <div class="work_description pad">
                        <div class="work_text">
                        <div class="year">
                        <a href="/works?year=2015">
                            <?php  if(ale_get_meta('descr1')){echo ale_get_meta('descr1');} ?>
                        </a>
                        </div>
                            <div class="text">
                               
                                 <?php  if(ale_get_meta('datefield')){echo ale_get_meta('datefield');} ?>  

                                <div class="work_info_text ico">
                                <?php if(ale_get_option('finfo')){ echo ale_get_option('finfo'); }?>   
                                </div>
                            </div>
                            <ul class="tags"><li><a rel="nofollow" href="/works?tag=%D0%BB%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF">логотип</a></li><li><a rel="nofollow" href="/works?tag=%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD">интернет-магазин</a></li><li><a rel="nofollow" href="/works?tag=%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD+%D1%81%D0%B0%D0%B9%D1%82%D0%B0">дизайн сайта</a></li></ul>
                        </div>
                        <div class="work_foot_pane fixed">
                            <div class="work_foot_pane_in">
                                <div class="work_foot_wrap">
                                    <div class="work_foot_line">
                                        <div class="work_foot">
                                            <button id="upper" class="btn btn_border"><span class="icon">↑</span></button>
                                            <div id="ca_share"><span class="b-share"><a rel="nofollow" target="_blank" title="Facebook" class="b-share__handle b-share__link b-share-btn__facebook" href="https://share.yandex.net/go.xml?service=facebook&amp;url=https%3A%2F%2Fcentroarts.com%2Fworks%2Fweb-design%2Ffutuland&amp;title=%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20-%20Futuland%20-%20%D0%92%D0%B5%D0%B1-%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20-%20Centroarts" data-service="facebook"><span class="b-share-icon b-share-icon_facebook"></span></a><a rel="nofollow" target="_blank" title="ВКонтакте" class="b-share__handle b-share__link b-share-btn__vkontakte" href="https://share.yandex.net/go.xml?service=vkontakte&amp;url=https%3A%2F%2Fcentroarts.com%2Fworks%2Fweb-design%2Ffutuland&amp;title=%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20-%20Futuland%20-%20%D0%92%D0%B5%D0%B1-%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20-%20Centroarts" data-service="vkontakte"><span class="b-share-icon b-share-icon_vkontakte"></span></a><a rel="nofollow" target="_blank" title="Twitter" class="b-share__handle b-share__link b-share-btn__twitter" href="https://share.yandex.net/go.xml?service=twitter&amp;url=https%3A%2F%2Fcentroarts.com%2Fworks%2Fweb-design%2Ffutuland&amp;title=%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20-%20Futuland%20-%20%D0%92%D0%B5%D0%B1-%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20-%20Centroarts" data-service="twitter"><span class="b-share-icon b-share-icon_twitter"></span></a><a rel="nofollow" target="_blank" title="Google Plus" class="b-share__handle b-share__link b-share-btn__gplus" href="https://share.yandex.net/go.xml?service=gplus&amp;url=https%3A%2F%2Fcentroarts.com%2Fworks%2Fweb-design%2Ffutuland&amp;title=%D0%94%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20-%20Futuland%20-%20%D0%92%D0%B5%D0%B1-%D0%B4%D0%B8%D0%B7%D0%B0%D0%B9%D0%BD%20-%20Centroarts" data-service="gplus"><span class="b-share-icon b-share-icon_gplus"></span></a></span></div>
                                            <div class="client"><button class="btn btn_border" data-target="#dialog_soc" data-toggle="modal"><span class="icon i_siteview"></span> Перейти на сайт</button></div>
                                            
                                            
                                            <div class="work_designed_by">
                                                <a rel="nofollow" href="http://centroarts.ru" title="© Создано в Centroarts">© Создано в Codbox</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            

    <div class="modal fade" id="dialog_soc" tabindex="-1" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon" aria-hidden="true">×</span></button>
                    <div class="ca_social_head">
                        <p>Будьте в курсе последних обновлений студии. Подпишитесь на нас в соц.сетях:</p>
                        <div class="ca_social_big">
                            <!-- <a rel="nofollow" target="_blank" title="Мы в Dribbble" href="https://dribbble.com/Centroarts" class="ca_db_big"><span class="icon">Dribbble</span></a> -->
                            <a rel="nofollow" target="_blank" title="Мы в VK" href="<?php echo ale_get_option('vk'); ?>" class="ca_vk_big"><span class="icon">VK</span></a>
                            <a rel="nofollow" target="_blank" title="Мы в Instagram" href="<?php echo ale_get_option('ins'); ?>" class="ca_in_big"><span class="icon">Instagram</span></a>
                            <a rel="nofollow" target="_blank" title="Мы в Facebook" href="<?php echo ale_get_option('fb'); ?>" class="ca_fb_big"><span class="icon">Facebook</span></a>
                            <a rel="nofollow" target="_blank" title="Мы в Twitter" href="<?php echo ale_get_option('yt'); ?>" class="ca_tw_big"><span class="icon">Youtube</span></a>
                        </div>
                    </div>
                    <div class="modal-foot_link"><a href="<?php  if(ale_get_meta('sitelink')){echo ale_get_meta('sitelink');} ?>" rel="nofollow" target="_blank"><span class="icon i_siteview_big"></span> Перейти на сайт</a></div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
<script src="//yastatic.net/share/share.js" charset="utf-8"></script>
<script>
new Ya.share({
    element: 'ca_share',
    elementStyle: {
        'type': 'none',
        'border': false,
        'quickServices': ['facebook', 'vkontakte', 'twitter', 'gplus']
    }
});
;
$(function(){
var footer = $('.work_foot_pane');
var stickyNavTop = $(footer).offset().top;
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
var stickySpace = $(window).height() - $(footer).height();
if (scrollTop + stickySpace < stickyNavTop) {
$(footer).addClass('fixed');
} else {
$(footer).removeClass('fixed');
}
};
stickyNav();
$(window).scroll(function() {
stickyNav();
});
});
highlight.push(location.origin+"/works");
$(function(){
$("div.ca_load_overlay.__rbt").addClass("bot"+(parseInt(Math.random()*10)+1));
$(window).load(function() {
setTimeout(function() {
$("body").removeClass("load");
}, 800)
});
})</script>
