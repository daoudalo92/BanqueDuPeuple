<?php
require_once 'db.php';
function addClient($nom, $prenom, $adresse, $tel){
    $sql = "INSERT INTO client VALUES (null ,'$nom','$prenom','$adresse','$tel')";

    $conn = getConnection();
    return $conn->exec($sql);
}

function listeClient(){
    $sql = "SELECT * FROM client";

    $conn = getConnection();
    return $conn->query($sql);
}
?>