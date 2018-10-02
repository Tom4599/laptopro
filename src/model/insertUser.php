<?php

function insertUser($mail, $password, $nom, $prenom, $ville, $cp, $adresse, $bdd) {

    $sth = "INSERT INTO user VALUES (DEFAULT,'$mail', '$password', '$nom', '$prenom', '$ville', '$cp', '$adresse', 0)";
    
    #This send the request to the database and returns a list
    $NewUser = $bdd->prepare($sth);
    $NewUser->execute();
    
}
?>