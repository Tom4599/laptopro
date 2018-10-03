<?php
require_once("getDatabase.php");
function getlaptopitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM laptop_full_info";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}

Function getlaptopetat($etat) {
    if ($etat == 4) {
        $bouton = '<span class="badge badge-success"> Neuf </span>';
    }
    elseif ($etat == 3) {
        $bouton = '<span class="badge badge-primary"> Bon état </span>';
    }
    elseif ($etat == 2) {
        $bouton = '<span class="badge badge-warning"> Moyen </span>';
    }
    elseif ($etat == 1) {
        $bouton = '<span class="badge badge-danger"> Mauvais état </span>';
    }
    else {
        $bouton = '<span class="badge badge-secondary"> Non renseigné </span>';
    }
    return($bouton);
}

Function getlaptopfromdid($id) {
    $bdd=getDatabase();
    $sth = "SELECT * FROM laptop_full_info WHERE id_laptop='$id'";

    #This send the request to the database and returns a list
    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $laptop = $laptopquery->fetch(PDO::FETCH_ASSOC);

    return $laptop;
}