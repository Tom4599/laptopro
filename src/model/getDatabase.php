<?php 
function getDatabase()
{
    try {
        $bdd = new PDO('mysql:host=82.64.28.83;dbname=work','work', 'workepsi');
        $bdd->exec("SET NAMES 'UTF8'");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    return $bdd;
}
?>
