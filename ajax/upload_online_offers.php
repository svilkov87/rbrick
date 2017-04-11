<?php
include("../include/connection.php");

## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//
    $name = $_POST['name'];
    $contacts = $_POST['s_name'];
    $theme = $_POST['theme'];
    $insert = $pdo->prepare("
        INSERT INTO `online_offers` 
        SET 
        client_type=:client_type, 
        delivery=:delivery, 
        client_name=:client_name, 
        adress=:adress, 
        contacts=:contacts,
        message=:message   
        ");
    $insert->bindParam(':client_type', $_POST['offer_type']);
    $insert->bindParam(':delivery', $_POST['offer_delivery']);
    $insert->bindParam(':client_name', $_POST['client_name']);
    $insert->bindParam(':adress', $_POST['adress']);
    $insert->bindParam(':contacts', $_POST['contacts']);
    $insert->bindParam(':message', $_POST['offer_message']);
    $insert->execute();


?>