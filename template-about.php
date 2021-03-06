<?php
/**
 * Template Name: Know
 */
get_header(); ?>
   <!-- Каталог -->
    <section id="know">
        <div class="title"><h2>Как экономять на материале 9 из 10 производителей кухонь</h2></div>
        <div class="wrap">
            <h3>Другие производители</h3>
            <div class="cols">
                <div class="col1"><img src="<?php echo get_template_directory_uri();?>/img/know/1.jpg" alt="" /></div>
                <div class="col2">
                    <ol>
                        <li><span>1</span> Полезная высота всего 72 см.</li>
                        <li><span>2</span> Полезная гулибина всего 50 см. Пустое пространство между стеной и задней стенкой модуля кухни скрывают столещницей.</li>
                    </ol>
                    <p>Итого: <span>полезный объём меньше на 37%</span>. Производитель кухни сэкономил на материале около 40%</p>
                </div>
            </div>
            <h3>Какие кухни делаем мы!</h3>
            <div class="cols">
                <div class="col1">
                    <ol>
                        <li><span>1</span> Высота модулей 90 см. Полезное пространство больше на 25%</li>
                        <li><span>2</span> Глубина 56 см. Полезное пространство больше на 12%</li>
                    </ol>
                    <p>Итого: Вы получаете кухню такого же размера и по такоей же цене, но с полезным объемом больше на ~ 0,7 м3</p>
                    <div class="conclusion">В наши кухни
                    помещается <span>на 49
                    сковородок</span> больше!</div>
                </div>
                <div class="col2"><img src="<?php echo get_template_directory_uri();?>/img/know/2.jpg" alt="" /></div>
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
            <li data-id="1">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="2">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="3">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="4">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="5">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="6">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
        </ul>
        <ul data-id="2">
            <li data-id="1">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="2">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="3">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="4">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="5">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="6">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
        </ul>
        <ul data-id="3">
            <li data-id="1">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="2">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="3">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="4">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="5">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
            <li data-id="6">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/catalog/1/1-1.jpg" alt="" />
                </div>
                <div class="col2">
                    <h3>Кухня «Марго»</h3>
                    <div class="wrapper">
                        <p><span>Описание</span> Современная архитектура раздвигает грани восприятия с
                        помощью неожиданных линий, фактуры, предметного дизайна
                        пространства. Rumba — это новое определение свободы,
                        вдохновение создать новый минимализм, органичный в своей
                        безукоризненной простоте.</p>
                        <p><span>Материал</span> На рамочных фасадах - пленка ПВХ со всех сторон /
                        на гладких фасадах – с лицевой стороны пленка ПВХ,
                        с обратной – белый ламинат.
                        Покрытие  - МДФ, пленка</p>
                        <p><span>Фурнитура</span> Разная при разная.. и такая, текст текст тест. Ручки, ножки
                        пластиковые, железные любые какие нужно... </p>
                        <a href="" class="btn pop-up" data-title="Узнать цену" data-desc="" data-ordername="Узнать цену -> Кухня «Марго»">Узнать цену</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    
    <div class="pop-ups" id="pop-up-success">
        <div class="b-close"></div>
        <p></p>
    </div>
<?php get_footer(); ?>