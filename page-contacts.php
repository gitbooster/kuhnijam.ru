<?php
/*
  * Template name: Contacts
  * */

// send contact
if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}
get_header(); ?>
<div class="conteiner">
    <div id="contacts" class="contacts">
        <div class="pad pagebody">
            <div class="grid_1_2">
                <div class="contact_text">
                    <h1 class="heading">Контакты</h1>
                    <p class="text">
                        Чтобы сделать заказ или узнать ориентировочную стоимость услуги заполните форму. Мы свяжемся с Вами в рабочие дни пн. – пт. с 10:00 до 19:00 по Московскому времени (UTC +04:00). Отправка заявки через форму гарантирует, что письмо будет доставлено независимо от Вашего почтового сервиса. Пожалуйста, не дублируйте сообщение, дождитесь ответа на Ваш вопрос.
                    </p>
                    <ul class="big_contacts">
                        <li><a href="mailto:<?php echo ale_get_option('femail'); ?>" rel="nofollow"><?php echo ale_get_option('femail'); ?></a></li>
                        <li>+373 060 31 66 98</li>
                    </ul>
                    <div class="ca_social">
                        <!-- <a rel="nofollow" target="_blank" title="Мы в Dribbble" href="https://dribbble.com/Centroarts" class="ca_db"><span class="icon">Dribbble</span></a> -->
                        <a rel="nofollow" target="_blank" title="Мы в VK" href="<?php echo ale_get_option('vk'); ?>" class="ca_vk"><span class="icon">VK</span></a>
                        <a rel="nofollow" target="_blank" title="Мы в Instagram" href="<?php echo ale_get_option('ins'); ?>" class="ca_in"><span class="icon">Instagram</span></a>
                        <a rel="nofollow" target="_blank" title="Мы в Facebook" href="<?php echo ale_get_option('fb'); ?>" class="ca_fb"><span class="icon">Facebook</span></a>
                        <a rel="nofollow" target="_blank" title="Мы в Youtube" href="<?php echo ale_get_option('yt'); ?>" class="ca_tw"><span class="icon">Youtube</span></a>
                    </div>
                </div>
            </div>
            <div class="grid_1_2 grid_last">
                <div class="contact_form">
                
                    <form method="post" id="contacts-form" action="<?php the_permalink();?>">
                    <div class="from-group">

<!-- Сообщение для отправки сообщений -->
<div class="feedback_msg feedback_msg_statusok">
            <a href="<?php the_permalink();?>"  class="close"><span class="icon">X</span></a>
            <div class="feedback_msg_anim">
            <span class="icon"></span></div>
            <div class="feedback_msg_wrp">
                <div class="feedback_msg_wrpin">
                <?php if (isset($_GET['success'])) : ?>
                    <div class="feedback_msg_good">
                        <b>Ушло!</b>
                        <p>Если в течении 2 рабочих дней вам не придет ответ. Пожалуйста продублируйте сообщение на <a href="mailto:webtheory@mail.ru">webtheory@mail.ru</a></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<!-- Сообщение для отправки сообщений -->
 <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="c_error"><?php echo $error['msg']?></p>
                        <?php endif; ?>
                     </div>

                    <div class="from-group">
                        <label for="yourname">Ваше имя</label>
                        <input name="contact[name]" type="text" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" class="field" />
                    </div>

                    <div class="from-group">     
                        <label for="youremail">Ваш e-mail</label>
                        <input name="contact[email]" type="email"  value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" class="field" />
                    </div>

                    <div class="from-group">
                        <label for="youremail">Ваш Скайп</label>
                        <input name="contact[skype]" type="text"  value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['skype'] : ''?>" required="required" id="contact-form-skype" class="field" />
                    </div>  
                    <div class="from-group"> 
                        <textarea name="contact[message]"  id="contact-form-message" rows="5"  class="field"required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                    </div>
                    <div class="from-submit">
                        <input type="hidden" value="<?php _e('Отправит', 'aletheme')?>"/>
                        <button class="btn" type="submit" tabindex="4"><b>Отправить</b></button>
                    </div>
                        <?php wp_nonce_field() ?>
                    </form>    
                      
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div id="faq" class="faq">
        <div class="pad pagebody">
            <ul class="faq_list grid_1_2">
                <li>
                    <h5>Можно ли купить работу из портфолио?</h5>
                    <p class="text">
                        Купить работу из портфолио нельзя.
                        В портфолио размещены работы, созданные по индивидуальному заказу,
                        они принадлежат только заказчикам. Купить готовые работы можно
                        только из раздела магазин.
                    </p>
                </li>
                <li>
                    <h5>Зачем нужен бриф?</h5>
                    <p class="text">
                        Бриф нужно заполнять для формирования технического задания на разработку.
                        Он является основой оценки стоимости и сроков работ.
                        В ходе заполнения брифа Вы даете ответы на ключевые вопросы.
                        Он направляет Вас и позволяет сформировать общую картину Ваших требований по заказу.
                    </p>
                </li>
                <li>
                    <h5>Что я получу после разработки?</h5>
                    <p class="text">
                        В зависимости от типа заказа, по результатам разработки Вам будет передан определенный архив.
                        Для шаблона и интерфейса - архив с утвержденными оригиналами макетов заказанных страниц в PSD.
                        Для HTML шаблонов и шаблонов с интеграцией - дополнительно к макетам отправляются файлы с версткой.
                        Шаблон с интеграцией также сопровождается инструкцией по установке и настройке.
                        Для сайта - макеты, бэкап сайта, инструкция для управления.
                        Для логотипа - утвержденный вариант в PDF и CDR. Иконки - в ICO и PNG.
                    </p>
                </li>
                <li>
                    <h5>Что такое прототип, эскиз?</h5>
                    <p class="text">
                        Прототип - структурная основа дизайна сайта, шаблона или интерфейса.
                        На этапе разработки прототипа, основной задачей является согласование расположения и состава
                        основных функциональных элементов. Эскиз - набросок логотипа или иконки.
                        Позволяет согласовать основу образа, его пропорции и формы. Это основа окончательного дизайна иконки или логотипа.
                    </p>
                </li>
            </ul>
            <ul class="faq_list grid_1_2 grid_last">
                <li>
                    <h5>Сколько времени требуется на разработку?</h5>
                    <p class="text">
                        Работа по каждому заказу индивидуальна: все зависит от объема и сложности работы.
                        Минимальные сроки: разработка логотипа - от 3 дней, шаблон - от 15 дней,
                        сайт - от 15 дней, интерфейс - от 5 дней, иконки - от 3 дней.
                    </p>
                </li>
                <li>
                    <h5>Сколько вариантов вы отправляете на согласование?</h5>
                    <p class="text">
                        Логотип - три варианта, остальные типы работ: сайт, шаблон, иконки, интерфейс - один вариант.
                        Предоставленный вариант (выбранный, в случае с логотипом) дорабатывается до утверждения.
                    </p>
                </li>
                <li>
                    <h5>Если мне не понравится разработанный дизайн?</h5>
                    <p class="text">
                        Разработка дизайна ведется на основе брифа.
                        Если представленный вариант соответствует пожеланиям брифа,
                        но в корне не устраивает заказчика, заполняется новый бриф,
                        вновь производится оценка стоимости и сроков разработки.
                        Работа делится на несколько этапов, результат работы по каждому этапу согласовывается с клиентом.
                    </p>
                </li>
                <li>
                    <h5>Вы работаете по предоплате?</h5>
                    <p class="text">
                        Да, мы работаем по предоплате.
                        Процент предоплаты зависит от типа заказа (количества этапов работы) и общей суммы разработки.
                        График оплаты формируется индивидуально.
                    </p>
                </li>
                <li>
                    <h5>Каким способом я могу оплатить заказ?</h5>
                    <p class="text">
                        Мы работаем с физическими и юридическими лицами
                        со следующими способами оплаты: банковский перевод, Сбербанк Online,
                        WebMoney, Яндекс.Деньги, PayPal, Western Union, Unistream.
                    </p>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
    </div>
    

<?php get_footer();

