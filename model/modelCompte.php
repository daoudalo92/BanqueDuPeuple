<?php
require_once 'db.php';
function addCompte($numero, $dateCreation, $solde){
    $sql = "INSERT INTO compte VALUES (null,'$numero','$dateCreation', null,'$solde')";

    $conn = getConnection();
    return $conn->exec($sql);
}

function listeCompte(){
    $sql = "SELECT * FROM compte";

    $conn = getConnection();
    return $conn->query($sql);
}
?>

