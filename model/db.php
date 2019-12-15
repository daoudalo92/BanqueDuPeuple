<?php
function getConnection(){
    $host = "localhost";
    $dbname = "banque";
    $user = "root";
    $password = "";

    $dsn = "mysql:host=$host;dbname=$dbname";
    try
    {
        $db = new PDO($dsn, $user, $password);
        //echo 'CONNEXION REUSSIE!!!!';
    }
    catch (PDOException $ex)
    {
        die('Error : '.$ex->getMessage());
    }
    return $db;
}
?>