<?php
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/itemmodel.php");
function getmarqueselect(){
    $arrayitem = getmarqueitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
            echo('<option value="' . $items['id_marque'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getprocesseurselect(){
    $arrayitem = getprocesseuritem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['id_processeur'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getstockageselect(){
    $arrayitem = getstockageitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['id_stockage'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getecranselect(){
    $arrayitem = getecranitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['id_ecran'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getcgselect(){
    $arrayitem = getcgitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['id_cg'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}

function getmarqueselect2(){
    $arrayitem = getmarqueitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['nom'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getprocesseurselect2(){
    $arrayitem = getprocesseuritem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['nom'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getstockageselect2(){
    $arrayitem = getstockageitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['nom'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getecranselect2(){
    $arrayitem = getecranitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['nom'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}
function getcgselect2(){
    $arrayitem = getcgitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
        echo('<option value="' . $items['nom'] .'"> '. $items['nom'] .'</option>');
//        }
    }
}