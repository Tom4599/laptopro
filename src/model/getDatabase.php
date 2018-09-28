<?php 
function getDatabase()
{
    try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=laptopro','root', '');
        $bdd->exec("SET NAMES 'UTF8'");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    return $bdd;
}
?>