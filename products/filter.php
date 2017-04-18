<?php include("../include/connection.php");
session_start();
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//фильтр
if(isset ($_POST['go_filter'])){
    // $size = $_POST['obl_size'];
    // $brand = $_POST['obl_brand'];
    $_SESSION["size"] = $_POST["obl_size"];
    $_SESSION["brand"] = $_POST["obl_brand"];

    //фильтр по-умлоанию -"все"
    if ($_POST['obl_size'] == "все" && $_POST['obl_brand'] == "все"){
        $st = $pdo->query('SELECT * FROM `brick`');
        $Filter = $st->fetchAll();
        header("Location: ".$_SERVER["REQUEST_URI"]);
        exit;
    }
        $stm = $pdo->prepare('SELECT * FROM `brick` WHERE sz=:sz AND brand=:brand ');
        $stm->bindParam(':sz', $_SESSION["size"], PDO::PARAM_INT);
        $stm->bindParam(':brand', $_SESSION["brand"], PDO::PARAM_INT);
        $stm->execute();
        $Filter = $stm->fetchAll();
        header("Location: obl_brick.php");

//    echo '<pre>';
//    var_dump($Filter);
//    echo '</pre>';
//

}

?>