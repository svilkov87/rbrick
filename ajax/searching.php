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
    $st = $pdo->query("SELECT * FROM `obl_brick` WHERE `name` LIKE '%$que%'");
    $Result = $st->fetchAll();
        foreach ($Result as $item):?>
            <div class="show_data">
                <p><?php echo $item['name']; ?></p>
            </div>

        <?php endforeach;
}?>