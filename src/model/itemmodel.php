<?php
require_once("getDatabase.php");
function getcategorieitem($categorie){
    $bdd=getDatabase();
    $sth = "SELECT * FROM '$categorie'";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetch(PDO::FETCH_ASSOC);

    return $arrayitem;
}