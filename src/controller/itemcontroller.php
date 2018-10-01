<?php
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/itemmodel.php");
function getmarqueselect(){
    $arrayitem = getmarqueitem();
    foreach($arrayitem as $items){
//        foreach ($items as $item ){
            echo('<option value="' . $items[id_marque] .'"> '. $items[nom] .'</option>');
//        }
    }
}