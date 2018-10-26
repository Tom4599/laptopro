<?php
require_once("getDatabase.php");
function getuserinfo($id){
    $bdd=getDatabase();
    $sth =('SELECT * FROM user WHERE id_user='.$id.' ');

    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $laptop = $laptopquery->fetch(PDO::FETCH_ASSOC);

    return $laptop;
}
function getalluser(){
    $bdd=getDatabase();
    $sth =('SELECT * FROM user ');

    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $laptop = $laptopquery->fetchAll(PDO::FETCH_ASSOC);

    return $laptop;
}
