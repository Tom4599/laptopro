<?php
require_once("getDatabase.php");
function getmarqueitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM marque";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}

