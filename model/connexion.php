<?php 
try {
    $db = new PDO('mysql:host=localhost;dbname=atelier_bdd;charset=utf8', 'root', '');
}
catch (Exception $error){

    die($error->getMessage());
}



?>