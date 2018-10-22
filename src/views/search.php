<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/laptopro/src/controller/itemcontroller.php");
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/itemmodel.php");
?>
<div class="card-header">
    <div class="card-header">
        Recherche / Filtres
    </div>
    <div class="card-body">
        <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
            <div class="input-group-append">
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Marque</option>
                    <?php
                    getmarqueselect();
                    ?>
                </select>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Processeur</option>
                    <?php
                    getprocesseurselect();
                    ?>
                </select>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Stockage</option>
                    <?php
                    getstockageselect();
                    ?>
                </select>
                <select class="custom-select" id="inputGroupSelect01" style="width:110%">
                    <option selected>Carte Graphique</option>
                    <?php
                    getcgselect();
                    ?>
                </select>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Ecran</option>
                    <?php
                    getecranselect();
                    ?>
                </select>
            </div>
        </div>
    </div>
</div>