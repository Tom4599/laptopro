<?php
/**
 * Created by PhpStorm.
 * User: polru
 * Date: 26/10/2018
 * Time: 09:30
 */
require_once("../model/getDatabase.php");
require_once("../controller/laptopcontroller.php");
if($_POST['action']=='search'){

    if (is_null($_POST['input']) && is_null($_POST['marque']) && is_null($_POST['processeur']) && is_null($_POST['stockage']) && is_null($_POST['cg']) && is_null($_POST['ecran'])){
        $retour=getlaptopcard(null,null,null,null,null,null);
    }
    else{
        $retour=getlaptopcard($_POST['input'],$_POST['marque'],$_POST['processeur'],$_POST['stockage'],$_POST['cg'],$_POST['ecran']);
    }
}

$jsonstring = json_encode($retour);
echo $jsonstring;
