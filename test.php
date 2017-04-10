<?php

include ("include/connection.php");

//Считаем общее количество вопросов(тем)
$testDb = $pdo->query('SELECT * FROM `online_offers`')->fetchColumn();

 echo "<pre>";
 var_dump($testDb);
 echo "</pre>";

?>