<?php

include("include/connection.php");

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//if (isset($_GET['get_res'])) {
//    $que = $_GET['live_search'];
//    $st = $pdo->query("SELECT * FROM `obl_brick` WHERE `name` LIKE '%$que%'");
//    $Result = $st->fetchAll();
//}
//
//echo '<pre>';
//var_dump($Result);
//echo '</pre>';

?>

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
            controls: false,         // отображение стрелки - вперед, назад
            startSlide: 0,          // Показ начнется с заданного слайда
            infiniteLoop: true,     // показывать первый слайд за последним 
            auto: true,             // сделать автоматический переход
            pause: 4000,            // время между сменой слайдов в м-сек
            speed: 500,             // длительность перехода слайда в м-сек
            useCSS: false           // CSS переходы
        });

            //            news
            $('.bx_news').bxSlider({
                mode: 'vertical',
                tickerHover: false,
                responsive: true,
                controls: false,
                auto: true,
                speed: 2000,
                pause: 6000,
                minSlides: 2,
                pager: false,
                slideMargin: 5
            });
		});
	</script>
	<link href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
</head>
<body>
<?php include("include/modal.php");?>
<?php include("include/online_offer.php");?>
<?php include("include/nav.php");?>
<div class="container">
    <hr>
</div>
<div class="container">
    <div class="bread">
        <span>главная</span> /
        <span>каталог</span> /
        <span>кирпич</span> /
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php include("include/sidebar.php");?>
            <?php include("include/news.php");?>
        </div>
        <div class="col-md-9">
            <div class="wrapp_slider">
                <div class="container-fluid">
                    <div class="row">
                        <ul class="bxslider">
                            <li>
                                <img src="http://placehold.it/450x150/21bc3e/ffffff">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Спецпредложение</h2>
                                    <p class="inner_slider">Описание</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/450x150/9aafc2/ffffff">
                                <div class="content_slider">
                                    <h2 class="header_content_slider">Другая акция</h2>
                                    <p class="inner_slider">описание</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/450x150/ed8b2f/ffffff">
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
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">кирпич</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">блоки</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">сухие смеси</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">кровля</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">утеплители</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="wrapp_item_cat">
                            <div class="cat_hover">
                                <a href="#">
                                    <p class="cat_descr">посмотреть</p>
                                </a>
                            </div>
                            <img src="http://placehold.it/200/ccc/ffffff" alt="alt">
                            <div class="cat_name">благоустройство</div>
                            <div class="fade_in_desc"> + 1000 наименований</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="nav_left">
                    <p class="nav_head">Навигация</p>
                    <ul class="foo_ul_nav">
                        <li class="foo_li_nav"><a href="#" class="a_nav_active">Главная</a></li>
                        <li class="foo_li_nav"><a href="#">О компании</a></li>
                        <li class="foo_li_nav"><a href="#">Наши объекты</a></li>
                        <li class="foo_li_nav"><a href="#">Доставка</a></li>
                        <li class="foo_li_nav"><a href="#">контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="foo_customer">
                    <p class="cust_head">Покупателю</p>
                    <ul class="cust">
                        <li class="cust_li"><a href="#">Как заказть</a></li>
                        <li class="cust_li"><a href="#">Оплата</a></li>
                        <li class="cust_li"><a href="#">Доставка</a></li>
                        <li class="cust_li"><a href="#">Обмен и возврат</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php include("include/scripts.php");?>
</body>
</html>
