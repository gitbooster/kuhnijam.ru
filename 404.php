<?php 
if (is_404()){
 include(TEMPLATEPATH.'/404_header.php');
 } else {
 include(TEMPLATEPATH.'/header.php');
 } ?>
    <div class="illustration"></div>
    <div class="wrp">
        <div class="content">
            <div class="logo">
                <?php if(ale_get_option('logo_404')){ ?>
                <a href="<?php echo home_url(); ?>/" class="custom_404_logo">
                <img src="<?php echo ale_get_option('logo404'); ?>" /></a>
                <?php } else { ?>
                <a href="<?php echo home_url(); ?>">Codbox</a>
                <?php } ?>

                <div class="content_in">
                    <h2 class="title">404</h2>
                    <p class="sub_title">Вы наверное потерялись?</p>
                    <ul class="menu">
                        <li><a href="/">На главную</a></li>
                        <li><a href="/works">В портфолио</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                        
                    </ul>
                    <p class="copyright">
                        © 2017 Дизайн студия <a href="http://codbox.ru">CODBOX</a><br>
                        <a href="mailto:webtheory@mail.ru" class="mail">webtheory@mail.ru</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
