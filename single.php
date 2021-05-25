<?php

require "model/connexion.php";
require "model/maisonModel.php";

    if(isset($_GET[ "id"]) && !empty($_GET["id"])) {

        $maison = getMaison($db, $_GET["id"]);
}
    else {
    header("Location:index.php");
}
?>
<h1>Details du foyer</h1>

<h2><?php echo $maison[0]["nom"]; ?></h2>

<!--la variable maison n'a rien a voir avec la variable creer dans maisonModel -->
