<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>stroy-hammer</title>
	<meta name="description" content="IMPOVAR" />
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
<div class="nav">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="logo_block">
					<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/logo_hammer_1.svg">
					<p class="logo_p">stroy hammer</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="nav_info">
					<div class="adress_info">
						<div class="adress_item">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span class="tel">8 800 000 000</span>
						</div>
						<div class="adress_item">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span class="adress">Нижний Новгород</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="nav_bottom">
		<div class="container">
			<div class="row">
				<i class="fa fa-bars" id="show_nav" aria-hidden="true"></i>
				<ul class="ul_menu">
					<li class="li_nav"><a href="#">главная</a></li>
					<li class="li_nav">
						<a href="#">услуги</a>
						<ul class="ul_child_serv">
							<li class="li_serv"><a href="#">отделка</a></li>
							<li class="li_serv"><a href="#">выезд специалиста</a></li>
							<li class="li_serv"><a href="#">помощь в приобретении материалов</a></li>
							<li class="li_serv"><a href="#">вывоз мусора</a></li>
						</ul>
					</li>
					<li class="li_nav"><a href="#">цены</a></li>
					<li class="li_nav"><a href="#">наши работы</a></li>
					<li class="li_nav"><a href="#">акции</a></li>
					<li class="li_nav"><a href="#">подарки</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
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
					<img src="http://mebel-fox.by/wp-content/uploads/2015/09/prihojaya-1024x500.jpg">
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
<div class="main_wrapp">
	<div class="container">
		<div class="row">
			<div class="main_head">
				<h1 class="head_title">Услуги по ремонту квартир, домов, офисов в Нижнем Новгороде</h1>
				<p class="as_we_doing">Кототко о том, как мы делаем ремонт:</p>
			</div>
			<div class="main_advantages">
				<div class="col-md-3 col-sm-6">
					<div class="item_adv">
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Good Quality-100.png" alt="Thumb Up-100.png" class="item_img">
						<div class="item_full_down">
							<div class="item_full_desc">
								<p>Три слова нашем качестве</p>
								<p>Три слова нашем качестве</p>
								<p>Три слова нашем качестве</p>
								<p>Три слова нашем качестве</p>
							</div>
							<div class="p_wrapp">
								<p class="p_down_desc">качественно</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="item_adv">
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Wrench-100 (1).png" alt="Thumb Up-100.png" class="item_img">
						<div class="item_full_down">
							<div class="item_full_desc">
								<p>Какие мы профессионалы</p>
								<p>Какие мы профессионалы</p>
								<p>Какие мы профессионалы</p>
								<p>Какие мы профессионалы</p>
							</div>
							<div class="p_wrapp">
								<p class="p_down_desc">профессионально</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="item_adv">
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Wedding Gift-50.png" alt="Thumb Up-100.png" class="item_img">
						<div class="item_full_down">
							<div class="item_full_desc">
								<p>Почему у нас выгодно</p>
								<p>Почему у нас выгодно</p>
								<p>Почему у нас выгодно</p>
								<p>Почему у нас выгодно</p>
							</div>
							<div class="p_wrapp">
								<p class="p_down_desc">100% подарки</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="item_adv">
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/View Details-100.png" alt="" class="item_img">
						<div class="item_full_down">
							<div class="item_full_desc">
								<p>Наша гарантия</p>
								<p>Наша гарантия</p>
							</div>
							<div class="p_wrapp">
								<p class="p_down_desc">гарантия</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="center_head">
				<h1 class="center_title">Мы реализуем полный комплекс услуг по ремонту и отделке помещений:</h1>
				<ul>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/RV Campground-100.png" alt="">
						<p class="as_we_working">Выезд специалиста на объект</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Drafting Compass-100 (1).png" alt="">
						<p class="as_we_working">Осмотр и замер</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Request Service-100.png" alt="">
						<p class="as_we_working">Консультация</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Fill Color-100.png" alt="">
						<p class="as_we_working">Помощь в подборе материалов</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Bill-100.png" alt="">
						<p class="as_we_working">Составление прозрачной сметы</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Handshake-100.png" alt="">
						<p class="as_we_working">Заключение договора</p>
					</li>
					<li>
						<img src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/Wallpaper Roll-100.png" alt="">
						<p class="as_we_working">Ремонт и отделка</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="coose_our">
				<div class="coose_child">
					<h2 class="choose_head">Воспользуйтесь нашими услугами!</h2>
					<p class="choose_desc">Оставьте заявку и мы свяжемся с Вами в ближайшее время.</p>
					<a href="#" class="send_need">Оставить запрос</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("include/scripts.php");?>
</body>
</html>
