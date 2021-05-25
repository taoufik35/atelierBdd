<?php 

function getMaisons(PDO $db):array {
  $response = $db->query("SELECT * FROM MAISON");
  $result = $response->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addMaison(PDO $db, array $maison): bool {

    $query= $db->prepare("INSERT INTO  maison(nom) VALUES(:nom)");
    $result= $query->execute([
        "nom" =>$maison["nom"]
    ]);
    return $result;
}

function getMaison(PDO $db, int $id) {
    $query = $db->prepare(
        "SELECT * FROM maison 
        LEFT JOIN CHIENS AS c
        ON C.MAISON8ID + m.id
        WHERE m.id=:id");
     $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>

