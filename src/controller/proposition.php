<?php
/**
 * Created by PhpStorm.
 * User: polru
 * Date: 05/10/2018
 * Time: 14:53
 */

require_once("../model/getDatabase.php");
if($_POST['action']=='proposition'){
    session_start();
    $laptop_id=$_POST['laptop_id'];
    $prix=$_POST['prix'];
    $bdd=getDatabase();
    $user_id=$_SESSION['id_user'];
    $sth = "INSERT INTO demande (id_laptop, id_user, prix, acceptation) VALUES ($laptop_id,$user_id,$prix, NULL);";
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $result='true';
}

if($_POST['action']=='accept'){
    session_start();
    $laptop_id=$_POST['laptop_id'];
    $user_id=$_POST['user_id'];
    $bdd=getDatabase();
    $sth = "UPDATE demande SET `acceptation` = '1' WHERE `demande`.`id_laptop` = $laptop_id AND `demande`.`id_user` = $user_id;";
    echo $sth;
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $result='true';
}

if($_POST['action']=='decline'){
    session_start();
    $laptop_id=$_POST['laptop_id'];
    $user_id=$_POST['user_id'];
    $bdd=getDatabase();
    $sth = "UPDATE demande SET `acceptation` = '0' WHERE `demande`.`id_laptop` = $laptop_id AND `demande`.`id_user` = $user_id;";
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $result='true';
}

$jsonstring = json_encode($result);
echo $jsonstring;
