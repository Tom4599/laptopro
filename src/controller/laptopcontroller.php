<?php
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/laptopmodel.php");
function getlaptopcard(){
    $arraylaptop = getlaptopitem();
    foreach($arraylaptop as $laptop){
        $etat=getlaptopetat($laptop['etat']);
        echo('
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                   <a href="laptop.php?id= '.$laptop['id_laptop'].' "><img class="card-img-top" src="'.$laptop['url_photo1'].'" alt=""></a>
                 <div class="card-body">
                    <h5 class="card-header">
                        <a><a class="btn btn-info" href="laptop.php?id= '.$laptop['id_laptop'].' "> '. $laptop['laptop_nom'] .' </a> <span class="badge badge-dark">'.$laptop['prix'].' jetons</span></a>
                    </h5>
                    <ul class="list-group">
                        <li class="list-group-item">Etat : '.$etat.'</li>
                        <li class="list-group-item">taille : <span class="badge">'.$laptop['taille'].' pouces</span></li>
                        <li class="list-group-item">definition : <span class="badge">'.$laptop['definition'].' pixels</span></li>
                        <li class="list-group-item">Marque : <span class="badge">'.$laptop['marque'].' </span></li>
                        <li class="list-group-item">Processeur : <span class="badge">'.$laptop['processeur'].' </span></li>
                        <li class="list-group-item">Carte Graphique : <span class="badge">'.$laptop['carte_graphique'].' </span></li>
                        <li class="list-group-item">Stockage : <span class="badge">'.$laptop['stockage'].' </span></li>
                        <li class="list-group-item">Ecran : <span class="badge">'.$laptop['ecran'].' </span></li>
                    </ul>
               </div>
            </div>
        </div>
        ');
    }
}