<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/laptopro/src/controller/laptopcontroller.php");
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/laptopmodel.php");
$laptop = getlaptopfromdid($_GET['id']);
$etat=getlaptopetat($laptop['etat'])
echo ('

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">'.$laptop['laptop_nom'].'
        <small>Vendeur : <a href="user.php?='.$laptop['id_vendeur'].'">'.$laptop['vendeur'].'</a> </small>
        </h1>
        <hr class="my-4">
        <div class="row">
        
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                          <!-- Slide One - Set the background image for this slide in the line below -->
                          <div class="carousel-item active">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                          </div>
                          <!-- Slide Two - Set the background image for this slide in the line below -->
                          <div class="carousel-item" >
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                          </div>
                          <!-- Slide Three - Set the background image for this slide in the line below -->
                          <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                          </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            
              <img class="img-fluid" src='.$laptop['url_photo1'].' alt="">
            </div>
        
            <div class="col-md-4">
              <h3 class="my-3">Caractéristiques Techniques</h3>
              <h3 class="my-3">Caractéristiques Techniques</h3>
              <ul>
                <li>etat '.$etat.'</li>
                <li>'.$laptop[''].'</li>
                <li>'.$laptop[''].'</li>
                <li>'.$laptop[''].'</li>
              </ul>
            </div>
        
        </div>
    </div>
</div>

');