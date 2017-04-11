<?php

include("include/connection.php");

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//$type = $_POST['offer_type'];
//$del = $_POST['offer_delivery'];
//$cName = $_POST['client_name'];

//if(isset($_POST['send_online_offer'])){
//    $insert = $pdo->prepare("
//    INSERT INTO `online_offers`
//    SET
//    client_type=:client_type,
//    delivery=:delivery,
//    client_name=:client_name,
//    adress=:adress,
//    contacts=:contacts,
//    message=:message
//    ");
//    $insert->bindParam(':client_type', $_POST['offer_type']);
//    $insert->bindParam(':delivery', $_POST['offer_delivery']);
//    $insert->bindParam(':client_name', $_POST['client_name']);
//    $insert->bindParam(':adress', $_POST['adress']);
//    $insert->bindParam(':contacts', $_POST['contacts']);
//    $insert->bindParam(':message', $_POST['offer_message']);
//    $insert->execute();
//}

//Считаем общее количество вопросов(тем)
//$testDb = $pdo->query('SELECT * FROM `online_offers`')->fetchColumn();
//
//echo "<pre>";
//var_dump($testDb);
//echo "</pre>";

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
<div class="nav">
    <div class="container">
        <div class="row">
            <div class="nav_left">
                <i class="fa fa-align-justify" id="fa-align-justify" aria-hidden="true"></i>
                <ul class="ul_nav">
                    <li class="li_nav"><a href="#" class="a_nav_active">Главная</a></li>
                    <li class="li_nav"><a href="#">О компании</a>
                        <ul class="child_ul">
                            <li class="child_li"><a href="#">новости</a></li>
                            <li class="child_li"><a href="#">наши объекты</a></li>
                            <li class="child_li"><a href="#">сертификаты</a></li>
                        </ul>
                    </li>
                    <li class="li_nav"><a href="#">покупателю</a>
                        <ul class="child_ul">
                            <li class="child_li"><a href="#">как заказать</a></li>
                            <li class="child_li"><a href="#">оплата</a></li>
                            <li class="child_li"><a href="#">доставка</a></li>
                            <li class="child_li"><a href="#">обмен и возврат</a></li>
                            <li class="child_li"><a href="#">контроль качества</a></li>
                        </ul>
                    </li>
                    <li class="li_nav"><a href="#">контакты</a>
                        <ul class="child_ul">
                            <li class="child_li"><a href="#">реквизиты</a></li>
                            <li class="child_li"><a href="#">схема проезда</a></li>
                        </ul>
                    </li>
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
                        <img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/v3.png" alt="alt">
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
            <div class="news">
                <div class="news_head">
                    <p>Новостной блок компании</p>
                </div>
                <ul class="bx_news">
                    <li>
                        <div class="wrapp_news">
                            <p class="news_p">Новость №1</p>
                            <a href="#">
                                <p class="news_descr">Описание данной новости и ссылка на полный раздел...</p>
                            </a>
                            <div class="date">
                                01.01.2017
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapp_news">
                            <p class="news_p">Новость №2</p>
                            <a href="#">
                                <p class="news_descr">Описание данной новости и ссылка на полный раздел...</p>
                            </a>
                            <div class="date">
                                01.01.2017
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapp_news">
                            <p class="news_p">Новость №3</p>
                            <a href="#">
                                <p class="news_descr">Описание данной новости и ссылка на полный раздел...</p>
                            </a>
                            <div class="date">
                                01.01.2017
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapp_news">
                            <p class="news_p">Новость №4</p>
                            <a href="#">
                                <p class="news_descr">Описание данной новости и ссылка на полный раздел...</p>
                            </a>
                            <div class="date">
                                01.01.2017
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="wrapp_news">
                            <p class="news_p">Новость №5</p>
                            <a href="#">
                                <p class="news_descr">Описание данной новости и ссылка на полный раздел...</p>
                            </a>
                            <div class="date">
                                01.01.2017
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="news_footer">
                <a href="#">Посмотреть все новости (15)</a>
            </div>
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
