<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 28/09/18
 * Time: 16:53
 */

function getProduitByID($id){

    $sth = "SELECT * FROM produit WHERE id_laptop='$id'";

    #This send the request to the database and returns a list
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $arraylaptop = $laptop->fetch(PDO::FETCH_ASSOC);

    return $arraylaptop;
}
?>