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
$jsonstring = json_encode($result);
echo $jsonstring;
