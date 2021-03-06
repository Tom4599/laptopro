<?php
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/laptopmodel.php");
function getuserlaptops(){
    if (isset($_GET['id'])){
        $arraylaptop = getuserlaptop($_GET['id']);

    }
    else{
        $arraylaptop = getuserlaptop($_SESSION['id_user']);
    }
    $retour = '';
    $actif = 0;
    foreach($arraylaptop as $laptop){
        if ($actif==0){
            $retour .=('
            <div class="carousel-item active">
              <img class="d-block w-100 h-100" src="'.$laptop['url_photo1'].'" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="btn-group-vertical btn-block">
                    <a type="button" class="btn btn-primary btn-lg btn-block" href="laptop.php?id='.$laptop['id_laptop'].'">
                        <h5>'. $laptop['marque'].' '.$laptop['laptop_nom'].'</h5>
                    </a>
                    <button type="button" class="btn btn-primary btn-lg btn-block">
                      prix : <span class="badge badge-light">'.$laptop['prix'].'</span> Jetons
                    </button> 
                </div>
              </div>
            </div>
            ');
            $actif=1;
        }
        else {
            $retour .=('
        
            <div class="carousel-item">
              <img class="d-block w-100 h-100" src="'.$laptop['url_photo1'].'" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                  <div class="btn-group-vertical btn-block">
                    <a type="button" class="btn btn-primary btn-lg btn-block" href="laptop.php?id='.$laptop['id_laptop'].'">
                        <h5>'. $laptop['marque'].' '.$laptop['laptop_nom'].'</h5>
                    </a>
                    <button type="button" class="btn btn-primary btn-lg btn-block">
                      prix : <span class="badge badge-light">'.$laptop['prix'].'</span> Jetons
                    </button> 
                </div>
                
              </div>
            </div>
            ');
        }

    }
    return $retour;
}
function getdemandes($user_id){
    $arraydemandes=getuserdemandes($user_id);
    if ($arraydemandes==false){
        $retour=('
        <a type="button" class="btn btn-primary btn-lg btn-block disabled" >Pas de demandes</a>
        ');
    }
    else {
        $retour="";
        foreach($arraydemandes as $demande){
            $retour .=('
        <div class="btn-group-vertical btn-block">
                
            <a type="button" class="btn btn-info btn-lg btn-block" href="laptop.php?id='.$demande['id_laptop'].'">
                '.$demande['demandeur'].' pour '.$demande['laptop_nom'].'
            </a>
            <button type="button" class="btn btn-info btn-lg btn-block">
                Pour <span class="badge badge-light">'.$demande['prix'].'</span> Jetons
            </button>
            <button class="btn btn-success btn-lg btn-block" onclick="acceptproposition('.$demande['id_laptop'].','.$demande['id_demandeur'].')">Accepter</button>
            <button class="btn btn-danger btn-lg btn-block" onclick="declineproposition('.$demande['id_laptop'].','.$demande['id_demandeur'].')">Refuser</button>
        </div>
        ');


        }
    }

    return $retour;
}
function getallusertab(){
    $arrayusers=getalluser();
    $retour="";
    foreach ($arrayusers as $user){
        $retour .=('
        <tr>
            <td>'.$user['id_user'].'</td>
            <td>'.$user['nom'].'</td>
            <td>'.$user['prenom'].'</td>
            <td>'.$user['mail'].'</td>
            <td>'.$user['cp'].'</td>
            <td>'.$user['ville'].'</td>
            <td>'.$user['adresse'].'</td>
            <td>'.$user['solde'].'</td>
            <td>'.$user['solde_block'].'</td>
            <td>
                <button type="button" class="btn btn-danger" onclick="deleteuser('.$user['id_user'].')">Supprimer</button>
            </td>
        </tr>
        ');
    }
    return $retour;
}
