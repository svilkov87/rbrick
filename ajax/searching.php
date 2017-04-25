<?php
include("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//if (isset($_POST['live_search']) && $_POST['live_search'] != ""){
    ## Выбираем заголовок статьи и её текст
//    $st = $pdo->prepare('SELECT * FROM `obl_brick` WHERE name LIKE :name');
//    $st->execute(array(
//        'name'=>'%'.$_POST['live_search'].'%'
//    ));
if (isset($_POST['search']) && $_POST['search'] != "") {
    $que = $_POST['search'];
    $st = $pdo->query("SELECT * FROM `products` WHERE `name` LIKE '%$que%'");
    $Result = $st->fetchAll();
        foreach ($Result as $item):?>
                <a href="http://<?php echo $_SERVER["HTTP_HOST"];?>/full_product.php?id=<?php echo $item['id']?>" class="search_a">
                    <?php echo $item['name']; ?>
                </a>
        <?php endforeach;
}?>