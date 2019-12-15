<?php
    require_once '\xampp\htdocs\mesprojets\BanqueDuPeuple\model\modelCompte.php';

    extract($_POST);

    $result = addCompte($numero,$dateCreation,$idClient,$solde);

    header("location:comptes");
?>