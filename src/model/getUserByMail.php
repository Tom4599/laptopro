<?php

function getUserByMail($mail, $bdd){

    $sth = "SELECT * FROM user WHERE mail='$mail'";

    #This send the request to the database and returns a list
    $User = $bdd->prepare($sth);
    $User->execute();
    $arrayUser = $User->fetch(PDO::FETCH_ASSOC);

    $retour = $arrayUser;

    return $retour;
}
?>