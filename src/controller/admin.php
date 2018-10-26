<?php
/**
 * Created by PhpStorm.
 * User: polru
 * Date: 25/10/2018
 * Time: 10:16
 */
require_once("../model/getDatabase.php");
if ($_POST['action'] == 'delete'){
    $bdd=getDatabase();
    $user_id=$_POST['user_id'];
    $sth = "DELETE FROM user where id_user='$user_id'";
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $result='true';
}

if ($_POST['action'] == 'laptop'){
    $bdd=getDatabase();
    $laptop_id=$_POST['laptop_id'];
    $sth = "DELETE FROM laptop where id_laptop='$laptop_id'";
    $laptop = $bdd->prepare($sth);
    $laptop->execute();
    $result='true';
}

$jsonstring = json_encode($result);
echo $jsonstring;
