<?php
include("include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//фильтр
if(isset ($_GET['go_filter'])){

    $size = $_GET['obl_size'];
    if ($size == "все"){
        $size = 1;
        $fieldSz = "all_sz";
    }
    else{
        $size = $_GET['obl_size'];
        $fieldSz = "sz";
    }
    //
    $brand = $_GET['obl_brand'];
    if ($brand == "все"){
        $brand = 1;
        $fieldBr = "all_brand";
    }
    else{
        $brand = $_GET['obl_brand'];
        $fieldBr = "brand";
    }

    $color = $_GET['obl_color'];
    if ($color == "все"){
        $color = 1;
        $fieldClr = "all_color";
    }
    else{
        $color = $_GET['obl_color'];
        $fieldClr = "color";
    }


    $surface = $_GET['obl_surface'];
    if ($surface == "все"){
        $surface = 1;
        $fieldSrf = "all_surface";
    }
    else{
        $surface = $_GET['obl_surface'];
        $fieldSrf = "surface";
    }

    $mark = $_GET['obl_mark'];
    if ($mark == "все"){
        $mark = 1;
        $fieldMrk = "all_mark";
    }
    else{
        $mark = $_GET['obl_mark'];
        $fieldMrk = "mark";
    }

    $material = $_GET['obl_mat'];
    if ($material == "все"){
        $material = 1;
        $fieldMtr = "all_material";
    }
    else{
        $material = $_GET['obl_mat'];
        $fieldMtr = "material";
    }

    //test
        $st = $pdo->query("
        SELECT * FROM `products` 
        WHERE 
        $fieldSz LIKE '%$size%' 
        AND $fieldBr LIKE '%$brand%' 
        AND $fieldClr LIKE '%$color%' 
        AND $fieldSrf LIKE '%$surface%'
        AND $fieldMrk LIKE '%$mark%'
        AND $fieldMtr LIKE '%$material%'
        ");
        $st->execute(array($size));
        $st->execute(array($brand));
        $st->execute(array($color));
        $st->execute(array($surface));
        $st->execute(array($mark));
        $st->execute(array($material));
        $filter = $st->fetchAll();
}
else{
//вывод категорий
$st = $pdo->query('SELECT * FROM `products` WHERE parent = "1"');
$oblBricks = $st->fetchAll();
}

//размер
if(!empty($_GET['obl_size'])){
    $st = $pdo->query('SELECT sz FROM `obl_brick_sizes`');
    $sz = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($sz as $key => $value) {
        if (in_array($_GET['obl_size'], $value)) {
            unset($sz[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT sz FROM `obl_brick_sizes`');
    $sz = $st->fetchAll();
}

//производитель
if(!empty($_GET['obl_brand'])){
    $st = $pdo->query('SELECT brand FROM `obl_brick_brands`');
    $br = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($br as $key => $value) {
        if (in_array($_GET['obl_brand'], $value)) {
            unset($br[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT brand FROM `obl_brick_brands`');
    $br = $st->fetchAll();
}

//цвет
if(!empty($_GET['obl_color'])){
    $st = $pdo->query('SELECT color FROM `obl_brick_colors`');
    $clr = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($clr as $key => $value) {
        if (in_array($_GET['obl_color'], $value)) {
            unset($clr[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT color FROM `obl_brick_colors`');
    $clr = $st->fetchAll();
}

//поверхность / фактура
if(!empty($_GET['obl_surface'])){
    $st = $pdo->query('SELECT surface FROM `obl_brick_surfaces`');
    $srf = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($srf as $key => $value) {
        if (in_array($_GET['obl_surface'], $value)) {
            unset($srf[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT surface FROM `obl_brick_surfaces`');
    $srf = $st->fetchAll();
}

//марка
if(!empty($_GET['obl_mark'])){
    $st = $pdo->query('SELECT mark FROM `obl_brick_mark`');
    $mrk = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($mrk as $key => $value) {
        if (in_array($_GET['obl_mark'], $value)) {
            unset($mrk[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT mark FROM `obl_brick_mark`');
    $mrk = $st->fetchAll();
}

//материал
if(!empty($_GET['obl_mat'])){
    $st = $pdo->query('SELECT material FROM `obl_brick_material`');
    $mtr = $st->fetchAll();

    //не показываем уже выбранные теги в  select option
    foreach ($mtr as $key => $value) {
        if (in_array($_GET['obl_mat'], $value)) {
            unset($mtr[$key]);
        }
    }
}
else{
    $st = $pdo->query('SELECT material FROM `obl_brick_material`');
    $mtr = $st->fetchAll();
}

echo '<pre>';
var_dump($_GET);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Кирпич облицовочный</title>
    <meta name="description" content="rbrick-nn.ru" />
    <?php include("include/head.php");?>
    <script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function(){
            //news
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
            <div class="category_header">Кирпич облицвочный</div>
            <div class="wrapp_obl_brick">
                <!--filter-->
                <div class="wrapp_obl_filter">
                    <div class="head_obl_filter">
                        Применить фильтр
                    </div>
                    <form action="" method="get" id="brick_obl_form">
                        <ul class="ul_obl_filt">
                            <li class="li_obl_filt">
                                <p class="lable">размер</p>
                                <select name="obl_size">
                                    <?php if (isset($_GET['obl_size'])): ?>
                                        <option value="<?php echo $_GET['obl_size']; ?>"><?php echo $_GET['obl_size']; ?></option>
                                    <?php endif; ?>
                                        <?php foreach ($sz as $item): ?>
                                            <option value="<?php echo $item['sz']; ?>"><?php echo $item['sz']; ?></option>
                                        <?php endforeach;?>
                                </select>
                            </li>
                            <li class="li_obl_filt">
                                <p class="lable">производитель</p>
                                <select name="obl_brand">
                                    <?php  if (isset($_GET['obl_brand'])):?>
                                    <option value="<?php echo $_GET['obl_brand']; ?>"><?php echo $_GET['obl_brand']; ?></option>
                                    <?php endif;?>
                                    <?php foreach ($br as $item): ?>
                                        <option value="<?php echo $item['brand']; ?>"><?php echo $item['brand']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>

                            <li class="li_obl_filt">
                                <p class="lable">цвет</p>
                                <select name="obl_color">
                                    <?php  if (isset($_GET['obl_color'])):?>
                                        <option value="<?php echo $_GET['obl_color']; ?>"><?php echo $_GET['obl_color']; ?></option>
                                    <?php endif;?>
                                    <?php foreach ($clr as $item): ?>
                                        <option value="<?php echo $item['color']; ?>"><?php echo $item['color']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>

                            <li class="li_obl_filt">
                                <p class="lable">поверхность</p>
                                <select name="obl_surface">
                                    <?php  if (isset($_GET['obl_surface'])):?>
                                    <option value="<?php echo $_GET['obl_surface']; ?>"><?php echo $_GET['obl_surface']; ?></option>
                                    <?php endif;?>
                                    <?php foreach ($srf as $item): ?>
                                        <option value="<?php echo $item['surface']; ?>"><?php echo $item['surface']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>
                            <li class="li_obl_filt">
                                <p class="lable">марка</p>
                                <select name="obl_mark">
                                    <?php  if (isset($_GET['obl_mark'])):?>
                                    <option value="<?php echo $_GET['obl_mark']; ?>"><?php echo $_GET['obl_mark']; ?></option>
                                    <?php endif;?>
                                    <?php foreach ($mrk as $item): ?>
                                        <option value="<?php echo $item['mark']; ?>"><?php echo $item['mark']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>
                            <li class="li_obl_filt">
                                <p class="lable">материал</p>
                                <select name="obl_mat">
                                    <?php  if (isset($_GET['obl_mat'])):?>
                                    <option value="<?php echo $_GET['obl_mat']; ?>"><?php echo $_GET['obl_mat']; ?></option>
                                    <?php endif;?>
                                    <?php foreach ($mtr as $item): ?>
                                        <option value="<?php echo $item['material']; ?>"><?php echo $item['material']; ?></option>
                                    <?php endforeach;?>
                                </select>
                            </li>
                        </ul>
                        <input type="submit" value="go" name="go_filter">
                    </form>
                </div>
                <!--/filter-->
                <div class="wrapp_preview">
                    <table class="table table-striped t_preview">
                        <thead class="prev_head">
                        <tr>
                            <th class="tr_obl">Фото</th>
                            <th class="tr_obl">Название</th>
                            <th class="tr_obl">Марка</th>
                            <th class="tr_obl">Производитель</th>
                            <th class="tr_obl">Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset ($_GET['go_filter'])):?>
                            <?php foreach ($filter as $item): ?>
                            <tr class="tr_bg">
                                <td><img class="img_prev_obl" src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/preview_prod/<?php echo $item['img']; ?>" alt="alt"></td>
                                <td>
                                    <a href="full_product.php?id=<?php echo $item['id'];?>">
                                        <?php echo $item['name']; ?>
                                    </a>
                                </td>
                                <td><?php echo $item['mark']; ?></td>
                                <td><?php echo $item['brand']; ?></td>
                                <td><?php echo $item['price']; ?></td>
                            </tr>
                            <?php endforeach;?>

                        <?php else:?>
                        <?php foreach ($oblBricks as $item): ?>
                            <tr class="tr_bg">
                                <td><img class="img_prev_obl" src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/preview_prod/<?php echo $item['img']; ?>" alt="alt"></td>
                                <td>
                                    <a href="full_product.php?id=<?php echo $item['id']; ?>">
                                        <?php echo $item['name']; ?>
                                    </a>
                                </td>
                                <td><?php echo $item['mark']; ?></td>
                                <td><?php echo $item['brand']; ?></td>
                                <td><?php echo $item['price']; ?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        <?php endif;?>
                    </table>
                    <!--media-->
                    <div class="wrapp_media">
                        <div class="media_features_obl">характеристики</div>
                        <?php if (isset($_GET['go_filter'])):?>
                            <?php foreach ($filter as $item): ?>
                                <div class="media_body_obl">
                                    <div class="col-md-2 col-sm-2 col-xs-4 img_block">
                                        <img class="img_prev_obl" src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/preview_prod/<?php echo $item['img']; ?>" alt="alt">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-8 items">
                                        <div class="col-md-3 col-sm-3">
                                            <a href="#">
                                                <p class="name"><?php echo $item['name']; ?></p>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <span>марка</span>
                                            <span class="bold"><?php echo $item['mark']; ?></span>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <span>производитель</span>
                                            <span class="bold"><?php echo $item['brand']; ?></span>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <span>цена</span>
                                            <span class="bold"><?php echo $item['price']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else:?>
                        <?php foreach ($oblBricks as $item): ?>
                        <div class="media_body_obl">
                            <div class="col-md-2 col-sm-2 col-xs-4 img_block">
                                <img class="img_prev_obl" src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/img/preview_prod/<?php echo $item['img']; ?>" alt="alt">
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-8 items">
                                <div class="col-md-3 col-sm-3">
                                    <a href="#">
                                        <p class="name"><?php echo $item['name']; ?></p>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <span>марка</span>
                                    <span class="bold"><?php echo $item['mark']; ?></span>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <span>производитель</span>
                                    <span class="bold"><?php echo $item['brand']; ?></span>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <span>цена</span>
                                    <span class="bold"><?php echo $item['price']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif;?>
                    </div>
                    <!--/media-->
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
