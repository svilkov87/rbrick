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
                        <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/logo_rb_1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <div class="block_nav_info">
                        <div class="con-md-12 col-sm-12">
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
                                    <div class="col-md-4">
                                        <span class="em_p">brr.rk52@gmail.com</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="em">8 950 000 15 12</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="call_link">Заказать звонок</span>
                                    </div>
                                </div>
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
                                <li class="add_li"><a href="#" class="a_child_side">Облицовочный</a></li>
                                <li class="add_li"><a href="#" class="a_child_side">Рядовой</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li">
                        <a href="#" class="a_side_main">Блоки</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Блоки</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side">Газобетонные блоки</a></li>
                                <li class="add_li"><a href="#" class="a_child_side">Керамические крупноформатные блоки </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li">
                        <a href="#" class="a_side_main">Сухие смеси</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Смеси</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side">Решения для декоративной и рядовой кладки</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Решения для облицовки плиткой и камнем</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Фасадные решения</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Решения для выравнивания пола и стен</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Цемент и цементо-песчанные смеси</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li"><a href="#" class="a_side_main">Кровельные материалы</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Кровля</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side"> Гибкая черепица</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Металлочерепица</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Профнастил</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Керамическая черепица</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Композитная черепица</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Подкладочные ковры</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Водосточные системы</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Гидроизоляция</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Ветроизоляция</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Пароизоляция</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li"><a href="#" class="a_side_main">Утеплители</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Утеплители</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side"> Базалтовая теплоизоляция</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Экструдированный пенополистирол</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Фасадный пенопласт</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li"><a href="#" class="a_side_main">Благоустройство</a>
                        <div class="side_addition_block">
                            <span class="side_add_header">Благоустройство</span>
                            <ul class="add_ul">
                                <li class="add_li"><a href="#" class="a_child_side"> Брусчатка</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Бордюры</a></li>
                                <li class="add_li"><a href="#" class="a_child_side"> Декоративные элементы</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="sideb_ul_mb">
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Кирпич</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb">облицовочный</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb">рядовой</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Блоки</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb">Газобетонные блоки</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb">Керамические крупноформатные</a></li>
                            </ul>
                        </div></li>
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Сухие смеси</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Решения для декоративной и рядовой кладки</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Решения для облицовки плиткой и камнем</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Фасадные решения</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Решения для выравнивания пола и стен</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Цемент и цементо-песчанные смеси</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Кровельные материалы</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Гибкая черепица</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Металлочерепица</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Профнастил</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Керамическая черепица</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Композитная черепица</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Подкладочные ковры</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Водосточные системы</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Гидроизоляция</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Ветроизоляция</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Пароизоляция</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Утеплители</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Базалтовая теплоизоляция</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Экструдированный пенополистирол</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Фасадный пенопласт</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side_li_mb"><a href="#" class="a_side_main_mb">Благоустройство</a>
                        <div class="mb_desc">
                            <ul class="add_ul_mb">
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Брусчатка</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Бордюры</a></li>
                                <li class="add_li_mb"><a href="#" class="a_child_side_mb"> Декоративные элементы</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="wrapp_slider">
                <div class="container-fluid">
                    <div class="row">
                        <ul class="bxslider">
                            <li>
                                <img src="http://fmabd.com/images/38.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">акция</h2>
                                    <p class="inner_slider">описание акции</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://www.afsdecksandfence.com/wp-content/uploads/2016/04/0357888415A100005A700002-attachment-1-IMG_0936-1024x500.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Спецпредложение</h2>
                                    <p class="inner_slider">Описание</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://www.ceraland.ru/upload/iblock/dff/1.jpg">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Другая акция</h2>
                                    <p class="inner_slider">описание</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="category_header">каталог продукции</div>
            <div class="wrapp_category">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <!--<div class="hover_rot">-->
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/ecf5969a8e421b3be2b1316c802a146f.jpg" alt="">
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/7e796439ef90a03018fe1a70c71f1ba0.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/11821949033048051_71ce.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/11821949033048051_71ce1111.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/118219490330.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/main_cat/brus.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("include/scripts.php");?>
</body>
</html>
