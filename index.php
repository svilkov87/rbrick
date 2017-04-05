<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>Русский Кирпич</title>
	<meta name="description" content="rbrick-nn.ru" />
	<?php include("include/head.php");?>
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.bxslider').bxSlider({
  	            mode: 'fade',           // тип перехода между слайдами может быть 'horizontal', 'vertical', 'fade'
            captions: true,         // отображение title
            easing: 'easeInOutQuad',// анимация слайда
            controls: true,         // отображение стрелки - вперед, назад
            startSlide: 0,          // Показ начнется с заданного слайда
            infiniteLoop: true,     // показывать первый слайд за последним 
            auto: true,             // сделать автоматический переход
            pause: 4000,            // время между сменой слайдов в м-сек
            speed: 500,             // длительность перехода слайда в м-сек
            useCSS: false           // CSS переходы
        });
		});
	</script>
	<link href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<?php include("include/modal.php");?>
<div class="bg_offer"></div>
<div class="wrapp_offer_online">
    <span class="close_offer">&times;</span>
    <div class="wr_off_inner">
        <div class="offer_header">
            <span class="span_offer">Расчет стоимости он-лайн</span>
        </div>
    </div>
</div>
<div class="nav">
    <div class="container">
        <div class="row">
            <div class="nav_left">
                <i class="fa fa-align-justify" id="fa-align-justify" aria-hidden="true"></i>
                <ul class="ul_nav">
                    <li class="li_nav"><a href="#" class="a_nav_active">Главная</a></li>
                    <li class="li_nav"><a href="#">О компании</a></li>
                    <li class="li_nav"><a href="#">Каталог</a></li>
                    <li class="li_nav"><a href="#">Доставка</a></li>
                    <li class="li_nav"><a href="#">контакты</a></li>
                </ul>
            </div>
            <div class="nav_right">
                <a href="#" class="sh_online_offer">Онлайн-предложение</a>
            </div>
        </div>
    </div>
</div>
<div class="nav_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="row">
                    <div class="block_logo">
                        <h2>
                            <span class="red_w">Р</span>усский
                            <span class="red_w">К</span>ирпич
                        </h2>
                        <p class="slogan_logo">Комплексное снабжение строительных объектов</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <div class="block_nav_info">
                        <div class="con-md-8 col-sm-8">
                            <div class="wrapp_nav_change">
                                <div class="nav_inf_search">
                                    <i class="fa fa-search" id="show_search"></i>
                                </div>
                                <div class="down_search">
                                    <form method="post" class="down_form_search">
                                        <input type="text" class="down_search_field" value autocomplete="off"
                                               placeholder="Поиск товара, марка или артикул...">
                                    </form>
                                </div>
                                <div class="nav_inf_contact">
                                    <p class="em_p">brr.rk52@gmail.com</p>
                                    <p class="em">8 950 000 15 12</p>
                                </div>
                            </div>
                        </div>
                        <div class="con-md-4 col-sm-4">
                            <div class="call">
                                <p class="call_link">Заказать звонок</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <div class="side_product">Продукция</div>
                <ul class="sideb_ul">
                    <li class="side_li">
                        <a href="#" class="a_side_main">Кирпич</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Кирпич</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side">Строительный кирпич</a></li>
                                <li class="add_li"><a href="#" class="a_child_side">Облицовочный кирпич</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li">
                        <a href="#" class="a_side_main">Блоки</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Блоки</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side">Строительный кирпич</a></li>
                                <li class="add_li"><a href="#" class="a_child_side">Облицовочный кирпич</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li">
                        <a href="#" class="a_side_main">Сухие смеси</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Смеси</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side">Строительный кирпич</a></li>
                                <li class="add_li"><a href="#" class="a_child_side">Облицовочный кирпич</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li"><a href="#" class="a_side_main">Утеплитель</a></li>
                    <li class="side_li"><a href="#" class="a_side_main">Пазогребневые плиты</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="wrapp_slider">
                <div class="container-fluid">
                    <div class="row">
                        <ul class="bxslider">
                            <li>
                                <img src="http://www.elitecleaners.co.uk/wp-content/uploads/2012/02/house-cleaning1.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Лучший в мире ремонт</h2>
                                    <p class="inner_slider">Лучший в мире сайт о ремонте...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://zar-remont.ru/assets/common/11-94bc08e66ddc0fac0edf5f619c5e74e4.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Лучшие в мире работники</h2>
                                    <p class="inner_slider">Лучший в мире Шура</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://levillagestbarth.com/wp-content/uploads/2016/05/Standard-hotel-bathroom.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Лучший в мире СэнСэй</h2>
                                    <p class="inner_slider">Лучший в мире Денис</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://comfortsolutions.com.ua/img/slide-02.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Много денег получим</h2>
                                    <p class="inner_slider">Спасибо за работу!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("include/scripts.php");?>
</body>
</html>
