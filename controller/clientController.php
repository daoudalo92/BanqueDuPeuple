<?php
    require_once '\xampp\htdocs\mesprojets\BanqueDuPeuple\model\modelClient.php';

    extract($_POST);

    $result = addClient($nom,$prenom,$adresse,$tel);

    header("location:clients");
?>