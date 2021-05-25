<?php 

//permet de charger une instance de PDO dans une variable db
require "model/connexion.php";
require "model/maisonModel.php";

// je verifie si un formulaire d'ajout a etait soumis 
if(!empty($_POST)){
    if(!addMaison($db, $_POST)){
        echo "l'enregistrement a echoué";
    }
    
    
}
//je recupere le contenu de la table maison
$maisons = getMaisons($db);



?>


<h1>
les foyers enregistrés
</h1>

<?php


foreach($maisons as $maison) :
?>

<p>Foyer : <?php echo $maison["nom"]?></p>
<a href="single.php?id =<?php echo $maison ["id"] ?>">Voir le foyer</a>

<?php endforeach; ?>

<h2>Enregistrer un foyer</h2>

<form action="" method="POST" >
    <input type="text" name="nom">
    <input type="submit" value="Enregistrer">
</form>