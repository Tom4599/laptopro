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
    if ($etat == 'Neuf') {
        $bouton = '<span class="badge badge-primary"> neuf </span>';
    }
    elseif ($etat == 'Peu Usé') {
        $bouton = '<span class="badge badge-secondary"> Peu Usé </span>';
    }
    elseif ($etat == 'Usé') {
        $bouton = '<span class="badge badge-warning"> Usé </span>';
    }
    elseif ($etat == 'Trés Usé') {
        $bouton = '<span class="badge badge-danger"> Trés Usé </span>';
    }
    else {
        $bouton = '<span class="badge badge-info"> Non renseigné </span>';
    }
    return($bouton);
}