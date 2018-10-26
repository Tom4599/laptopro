<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/laptopro/src/model/usermodel.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/laptopro/src/controller/userlaptopcontroller.php');
$info=getuserinfo($_GET['id']);
$laptopcarousel=getuserlaptops();
echo ('
<!-- Page Content -->
<div class="container">

      <!-- Portfolio Item Heading -->
<h1 class="my-4">'.$info['prenom'].'
    <small>'.$info['nom'].'</small>
</h1>

<!-- Portfolio Item Row -->
<div class="row">

    <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-inner">
            '.$laptopcarousel.'
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
    </div>
    
    <div class="col-md-4">
        <h3 class="my-3">Informations Personelles</h3>
        <ul>
            <li>Ville : '.$info['ville'].'</li>
            <li>CP : '.$info['cp'].'</li>
        </ul>
    </div>
    
</div>
<!-- /.row -->
    
<!-- Related Projects Row -->
<h3 class="my-4">Ordi vendus</h3>

<div class="row">
    
</div>
 ');