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

function getprocesseuritem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM processeur";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}

function getstockageitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM stockage";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}
function getecranitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM ecran";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}
function getcgitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM carte_graphique";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}

