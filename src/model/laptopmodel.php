<?php
require_once("getDatabase.php");
function getlaptopitem(){
    $bdd=getDatabase();
    $sth = "SELECT * FROM laptop_full_info";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}

Function getlaptopetat($etat) {
    if ($etat == 4) {
        $bouton = '<span class="badge badge-success"> Neuf </span>';
    }
    elseif ($etat == 3) {
        $bouton = '<span class="badge badge-primary"> Bon état </span>';
    }
    elseif ($etat == 2) {
        $bouton = '<span class="badge badge-warning"> Moyen </span>';
    }
    elseif ($etat == 1) {
        $bouton = '<span class="badge badge-danger"> Mauvais état </span>';
    }
    else {
        $bouton = '<span class="badge badge-secondary"> Non renseigné </span>';
    }
    return($bouton);
}

Function getlaptopfromdid($id) {
    $bdd=getDatabase();
    $sth = "SELECT * FROM laptop_full_info WHERE id_laptop='$id'";

    #This send the request to the database and returns a list
    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $laptop = $laptopquery->fetch(PDO::FETCH_ASSOC);

    return $laptop;
}

function getlaptopstockage($laptop) {
    if ($laptop['espace_stockage_hdd'] or $laptop['espace_stockage_ssd'] != null){
        if ($laptop['espace_stockage_ssd'] != null and $laptop['espace_stockage_hdd'] == null){
            $retour=('<li>Stockage SSD : '.$laptop['espace_stockage_ssd'].' Go</li>');
        }
        elseif ($laptop['espace_stockage_hdd'] != null and $laptop['espace_stockage_ssd'] == null){
            $retour=('<li>Stockage HDD : '.$laptop['espace_stockage_hdd'].' Go</li>');
        }
        else {
            $retour=('<li>Stockage SSD : '.$laptop['espace_stockage_ssd'].' Go</li>
                      <li>Stockage HDD : '.$laptop['espace_stockage_hdd'].' Go</li>');
        }


    }
    else {
        $retour=('<li>Pas de Stockage Intégré</li>');
    }
    return $retour;
}

function getlaptopcarousel($laptop){
    if ($laptop['url_photo3']!=null && $laptop['url_photo2']!=null && $laptop['url_photo1']!=null){
        $carousel=('
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <div class="carousel-item active">
                                <img class="d-block w-100" src='.$laptop['url_photo1'].' alt="First slide">
                          </div>
                          <!-- Slide Two - Set the background image for this slide in the line below -->
                          <div class="carousel-item" >
                                <img class="d-block w-100" src='.$laptop['url_photo2'].' alt="Second slide">
                          </div>
                          <div class="carousel-item" >
                                <img class="d-block w-100" src='.$laptop['url_photo3'].' alt="Third slide">
                          </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fas fa-arrow-alt-circle-left fa-3x" style="color: black"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fas fa-arrow-alt-circle-right fa-3x" style="color: black"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
                ');
    }
    elseif ($laptop['url_photo3']==null && $laptop['url_photo2']!=null && $laptop['url_photo1']!=null){
        $carousel=('
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <div class="carousel-item active">
                                <img class="d-block w-100" src='.$laptop['url_photo1'].' alt="First slide">
                          </div>
                          <!-- Slide Two - Set the background image for this slide in the line below -->
                          <div class="carousel-item" >
                                <img class="d-block w-100" src='.$laptop['url_photo2'].' alt="Second slide">
                          </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fas fa-arrow-alt-circle-left fa-3x" style="color: black"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fas fa-arrow-alt-circle-right fa-3x" style="color: black"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
                ');
    }
    elseif ($laptop['url_photo3']==null && $laptop['url_photo2']==null && $laptop['url_photo1']!=null){

        $carousel=('
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <img class="d-block w-100" src='.$laptop['url_photo1'].' alt="Premiére Image">

                    </div>
                </div>
                
                ');

    }
    else{
        $carousel=('
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <div class="carousel-item active">
                                <h1>Pas d\'image Renseignée</h1>
                          </div>
                    </div>
                </div>
                
                ');
    }
    return $carousel;
}

function getlaptoppaiment($laptop){
//    $_POST['login']='true';
    if (isset($_SESSION)){
        $prop=getuserprop($laptop['id_laptop']);
        if ($_SESSION['id_user']==$laptop['id_vendeur']){
            $logbutton=('<a type="button" class="btn btn-primary btn-lg btn-block" href="src/controller/login.php">Modifer</a>');
        }
        elseif ($prop == $_SESSION['id_user']){
            $logbutton=('<a type="button" class="btn btn-primary btn-lg btn-block disabled" >Deja Proposé</a>');
        }
        else{
            $logbutton=('<a type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Proposer</a>');
        }

    }
    else{
        $_POST['redirection']=('laptop.php?id='.$laptop['id_laptop'].'');
        $logbutton=('<a type="button" class="btn btn-primary btn-lg btn-block" href="src/controller/login.php">Proposer</a>');
    }
    return $logbutton;
}

function getuserprop($id){
    $bdd=getDatabase();
    $sth = "SELECT id_user FROM demande WHERE id_laptop='$id'";

    #This send the request to the database and returns a list
    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $rep = $laptopquery->fetch(PDO::FETCH_ASSOC);
    return $rep['id_user'];

}
function getuserlaptop($user_id){
    $bdd=getDatabase();
    $sth = "SELECT * FROM laptop_full_info WHERE id_vendeur ='$user_id'";

    #This send the request to the database and returns a list
    $categorieitem = $bdd->prepare($sth);
    $categorieitem->execute();
    $arrayitem = $categorieitem->fetchAll(PDO::FETCH_ASSOC);

    return $arrayitem;
}
function getuserdemandes($user_id){
    $bdd=getDatabase();
    $sth = "SELECT * FROM demande_full_info WHERE id_vendeur='$user_id'";

    #This send the request to the database and returns a list
    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $rep = $laptopquery->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
}

function getlaptopvendeur($laptop_id){
    $bdd=getDatabase();
    $sth = "SELECT id_user FROM laptop WHERE id_laptop='$laptop_id'";

    #This send the request to the database and returns a list
    $laptopquery = $bdd->prepare($sth);
    $laptopquery->execute();
    $rep = $laptopquery->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
}

    function insertlaptop($nom,$prix,$taille,$def,$ram,$stoHDD,$stoSSD,$poids,$etat,$url1,$url2,$url3,$id_user,$id_marque,$id_cg,$id_stockage,$id_ecran,$id_processeur){
    $bdd=getDatabase();
    $sth = "INSERT INTO laptop VALUES (DEFAULT,'$nom', '$prix', '$taille', '$def', '$ram', '$stoHDD', '$stoSSD', '$poids', '$etat' , CURRENT_DATE() , '$url1', '$url2', '$url3', '$id_user' ,'$id_marque','$id_cg', '$id_stockage' , '$id_ecran' , '$id_processeur')";
//    echo $sth;

    #This send the request to the database and returns a list
    $NewPC = $bdd->prepare($sth);
    $NewPC->execute();


}