<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/laptopro/src/controller/laptopcontroller.php");
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/laptopmodel.php");

$laptop = getlaptopfromdid($_GET['id']);
$etat=getlaptopetat($laptop['etat']);
$stockage=getlaptopstockage($laptop);
$images=getlaptopcarousel($laptop);
$paiment=getlaptoppaiment($laptop);
$prixmax=$laptop['prix'] + 50;
$prixmin=$laptop['prix'] - 50;
if ($prixmin<0){
    $prixmin=0;
};
echo ('

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">
            <div class="row">
                <span class="col-6">
                '.$laptop['marque'].'  '.$laptop['laptop_nom'].'
                </span>
                <span class="col-6">
                <small>Vendeur : <a href="user.php?='.$laptop['id_vendeur'].'">'.$laptop['vendeur'].'</a> </small>
                </span>
            </div>
        </h1>
        <hr class="my-4">
        <div class="row">
        
            <div class="col-md-8">
                '.$images.'            
            </div>
        
            <div class="col-md-4">
              <h3 class="my-3">Overview</h3>
              
              <ul>
                <li>Prix : '.$laptop['prix'].'</li>
                <li>Marque : '.$laptop['marque'].'</li>
                <li>Etat : '.$etat.'</li>
                <li>Taille : '.$laptop['taille'].' pouces</li>
                <li>Définition : '.$laptop['definition'].'p</li>
                <li>Poids : '.$laptop['poids'].'</li>
                <li>Type de Stockage : '.$laptop['stockage'].'</li>
                
              </ul>
              <h3 class="my-3">Caractéristiques Techniques</h3>
              <ul>
                <li>Mémoire Ram : '.$laptop['ram'].' pouces</li>
                '.$stockage.'
                <li>Processeur : '.$laptop['processeur'].'</li>
                <li>Type d\'écran : '.$laptop['ecran'].'</li>
                <li>Carte Graphique : '.$laptop['carte_graphique'].'</li>
              </ul>
                '.$paiment.'
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Propositon</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Proposez votre prix</label>
                            <input type="number" name="quantity" min="'.$prixmin.'" max="'.$prixmax.'" id="prix" class="form-control" value="'.$laptop['prix'].'">
                          </div> 
                          <p>Prix de base : '.$laptop['prix'].'</p>                       
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="sendproposition('.$laptop['id_laptop'].','.$prixmin.','.$prixmax.')">Proposer</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
            
            
                        
        </div>
    </div>
</div>

');