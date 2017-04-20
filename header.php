<!DOCTYPE html>
<html lang="ru">
<head>
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
    <!-- Шапка-->
    <header>
        <div class="wrap">
            <div class="device-nav-btn"></div>
            <!-- <a href="" data-target="firstpage" class="logo header-nav-link"></a> -->
            <nav class="main-nav">
                <ul>
                    <li><a href="" class="header-nav-link" data-target="catalog">Каталог</a></li>
                    <li><a href="" class="header-nav-link" data-target="calculator">Калькулятор</a></li>
                    <li><a href="" class="header-nav-link" data-target="free-services">Услуги</a></li>
                    <li><a href="" class="header-nav-link" data-target="reviews">Отзывы</a></li>
                    <li><a href='http://kuhnijam.ru' style='font-size: 35px; font-weight: bold;' class="header-nav-link">Кухни на заказ от производителя</a></li>
                </ul>
            </nav>
            <a href="" class="callback pop-up" data-title="Форма обратной связи" data-desc="Оставьте заявку, мы Вам перезвоним!" data-ordername="Заказать звонок"><span>Обратный звонок</span></a>
            <!-- <div class="phone">8 (952) 000 31 00</div> -->
        </div>
        <nav class="device-nav">
            <ul>
                <li><a href="" class="header-nav-link active" data-target="catalog">Каталог</a></li>
                <li><a href="" class="header-nav-link" data-target="calculator">Калькулятор</a></li>
                <li><a href="" class="header-nav-link" data-target="free-services">Услуги</a></li>
                <li><a href="" class="header-nav-link" data-target="reviews">Отзывы</a></li>
            </ul>
        </nav>
    </header>