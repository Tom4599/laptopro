<?php
require_once("getDatabase.php");
function proposition($laptop_id,$prix){
    $bdd=getDatabase();
    $user_id=$_SESSION['id'];
    $sth = "INSERT INTO demande (id_laptop, id_user, prix, acceptation) VALUES ($laptop_id,$user_id,$prix, NULL);";

    #This send the request to the database and returns a list
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
}