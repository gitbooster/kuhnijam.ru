 <!-- Загрузка фото -->
    <section id="upload">
        <h2>Хотите уточнить цену?</h2>
        <hr>
        <div class="upload">
            <div>
                <h3>Загрузите фотографию любой кухни</h3>
                <hr>
                <p>И мы сделаем рассчет стоимости на нашем производстве!</p>
                <a href="" class="btn pop-up" data-id="upload" data-title="Загрузите фото или набросок кухни" data-desc="" data-ordername="Загрузка фото">Загрузить фото</a>
            </div>
        </div>
        <div class="or">или</div>
    </section>
    
    <!-- Калькулятор -->
    <section id="calculator">
        <div class="wrap">
            <h2>Воспользуйтесь калькулятором</h2>
            <div class="calculator">
                <form>
                <div class="cols">
                    <div class="col-2">
                        <label class="title"><span>1</span> Выберите конструкцию</label>
                        <div class="col-2">
                            <input type="radio" name="design" value="Прямая конструкция" id="design1" checked>
                            <label for="design1" class="design design1"></label>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="design" value="П-образная конструкция" id="design2">
                            <label for="design2" class="design design2"></label>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="design" value="Г-образная конструкция (слева)" id="design3">
                            <label for="design3" class="design design3"></label>
                        </div>
                        <div class="col-2">
                            <input type="radio" name="design" value="Г-образная конструкция (справа)" id="design4">
                            <label for="design4" class="design design4"></label>
                        </div>
                    </div>
                    <div class="col-2 relative">
                        <label class="title"><span>2</span> Укажите размеры кухни</label>
                        <div class="range-horizontal">
                            <input type="text" name="s_horizontal" id="s-amount-1" value="1 м 00 см" readonly>
                            <div id="s-range-1"></div>
                        </div>
                        <div class="range-vertical-l">
                            <div id="s-range-2"></div>
                            <input type="text" name="s_vertical_l" id="s-amount-2" value="1 м 00 см" readonly>
                        </div>
                        <div class="range-vertical-r">
                            <div id="s-range-3"></div>
                            <input type="text" name="s_vertical_r" id="s-amount-3" value="1 м 00 см" readonly>
                        </div>
                        <div class="sizes"></div>
                    </div>
                </div>
                <div class="cols">
                    <div class="col-3">
                        <label class="title"><span>3</span> Выберите вид</label>
                        <select name="view">
                            <option checked>- Нет -</option>
                            <option>Кухни от 15 000 до 80 000</option>
                            <option>Кухни от 80 000 до 150 000</option>
                            <option>Авторские кухни</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="title"><span>4</span> Столешница</label>
                        <select name="countertop">
                            <option checked>- Нет -</option>
                            <option>Пластик HPL</option>
                            <option>Искусственный камень 4 мм</option>
                            <option>Искусственный камень 12 мм</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="title"><span>5</span> Стеновая панель</label>
                        <select name="wall_plates">
                            <option checked>- Нет -</option>
                            <option>В цвет столешницы</option>
                            <option>Стекло с фотопечатью</option>
                        </select>
                    </div>
                </div>
                <div class="cols">
                    <div class="col-1">
                        <label class="title"><span>6</span> Дополнительно</label>
                    </div>
                    <div class="col-4">
                        <span>Доводчики</span>
                        <input type="checkbox" name="closers" value="Да" id="option1" class="optional" checked="checked">
                        <label class="toggler" for="option1"></label>
                    </div>
                    <div class="col-4">
                        <span>Диодная подсветка</span>
                        <input type="checkbox" name="diode_lights" value="Да" id="option2" class="optional" checked="checked">
                        <label class="toggler" for="option2"></label>
                    </div>
                    <div class="col-4">
                        <span>Техника</span>
                        <input type="checkbox" name="equipment" value="Да" id="option3" class="optional" checked="checked">
                        <label class="toggler" for="option3"></label>
                    </div>
                </div>
                <div class="cols">
                    <div class="col-1">
                        <label class="title"><span>7</span> Получите рассчет кухни</label>
                    </div>
                    <div class="col-3">
                        <input type="text" name="name" placeholder="Ваше имя..." class="required" />
                    </div>
                    <div class="col-3">
                        <input type="text" name="name" placeholder="Ваш телефон..." class="required" />
                    </div>
                    <div class="col-3">
                        <input type="hidden" name="ordername" value="Калькулятор" />
                        <label class="btn"><input type="submit" value="Получить рассчет" /></label>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Как экономят -->
    <section id="material">
        <div class="wrap">
            <h2>Как экономят на материале 9 из 10 производителей кухонь...</h2>
            <a href="/know" class="btn">Узнать</a>
        </div>
    </section>
    
    <!-- Производство -->
    <section id="manufacture">
        <div class="wrap">
            <h2>Наше производство</h2>
            <hr>
        </div>
        <div class="slider">
            <div class="wrap">
                <div class="items">
                    <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/manufacture/1.jpg" alt="" /></div>
                    <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/manufacture/1.jpg" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Бесплатные услуги -->
    <section id="free-services">
        <div class="wrap">
            <h2>Бесплатные услуги</h2>
            <hr>
            <div class="cols">
                <div class="col1">
                    <img src="<?php echo get_template_directory_uri();?>/img/free-services/main.jpg" alt="" />
                </div>
                <div class="col2">
                    <p class="title">Бесплатные услуги дизайнера</p>
                    <div class="items">             
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/img/free-services/1.jpg" alt="" />
                            <p>Выезд на замер</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/img/free-services/2.jpg" alt="" />
                            <p>Дизайн проект с точной ценой</p>
                        </div>
                    </div>
                    <p class="title">Бесплатные сервисные услуги</p>
                    <div class="items">             
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/img/free-services/3.jpg" alt="" />
                            <p>Сборка и монтаж</p>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/img/free-services/4.jpg" alt="" />
                            <p>Доставка до квартиры</p>
                        </div>
                    </div>
                    <p class="title">Приятные подарки</p>
                    <div class="items">             
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri();?>/img/free-services/5.jpg" alt="" />
                            <p>Духовой шкаф</p>
                        </div>
                        <div class="item">
                            <a href="" class="pop-up-promo"><img src="<?php echo get_template_directory_uri();?>/img/free-services/6.jpg" alt="" /></a>
                            <p>Подарок для всех</p>
                        </div>
                    </div>
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
    
    <!-- Отзывы -->
    <section id="reviews">
        <div class="wrap">
            <h2>Хотите узнать отзывы о нас?</h2>
            <hr>
            <p>Мы предоставим номера телефонов 3-х наших заказчиков, узнайте все у них!</p>
            <a href="" class="btn pop-up" data-title="Форма заявки" data-desc="Оставте заявку, мы отправим на Ваш<br> телефон 3 номера!" data-ordername="Получить номера">Получить номера</a>
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
    <footer>
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
            <label class="submit"><input type="submit" class="btn" value="Отправить"></label>
        </form>
    </div>
    
    <!-- <div class="pop-ups" id="pop-up-promo">
        <div class="b-close"></div>
        <h3>Мы дарим подарки!</h3>
        <hr>
        <p>Оставьте телефон, мы объясним где забрать подарок!</p>
        <div class="cols">
            <div class="col1">
                <img src="<?php echo get_template_directory_uri();?>/img/podarok.png" alt="" />
            </div>
            <div class="col2">
                <form>
                    <input type="text" name="name" placeholder="Имя" class="required" >
                    <input type="text" name="phone" placeholder="Номер телефона" class="required" >
                    <input type="hidden" name="ordername" class="ordername" value="Мы дарим подарки">
                    <label class="submit"><input type="submit" class="btn" value="Отправить"></label>
                </form>
            </div>
        </div>
    </div> -->