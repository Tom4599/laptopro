<?php
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/itemmodel.php");
function getcategoriedropdown($categorie){
    $arrayitem = getcategorieitem($categorie);
    var_dump($arrayitem);
    foreach($arrayitem as $item){
        echo('<a class="dropdown-item">' . $item . '</a>');
    }
}