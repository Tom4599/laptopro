<?php

function insertUser($nom,$prenom,$adresse,$cp,$ville,$mail,$password,$bdd) {
    
    $sth = "INSERT INTO user VALUES (DEFAULT,'$nom','$prenom','$date_naissance','$ville_naissance','$adresse','$mail','$password','$poids','$tel','')";
    
    #This send the request to the database and returns a list
    $NewUser = $bdd->prepare($sth);
    $NewUser->execute();
    
}
?>