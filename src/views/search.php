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
            <input type="text" class="form-control" aria-label="Text input with dropdown button" id="inputlaptop">
            <div class="input-group-append">
                <select class="custom-select" id="marqueselect">
                    <option selected value="null">Marque</option>
                    <?php
                    getmarqueselect();
                    ?>
                </select>
                <select class="custom-select" id="proselect">
                    <option selected value="null">Processeur</option>
                    <?php
                    getprocesseurselect();
                    ?>
                </select>
                <select class="custom-select" id="stoselect">
                    <option selected value="null">Stockage</option>
                    <?php
                    getstockageselect();
                    ?>
                </select>
                <select class="custom-select" id="cgselect" style="width:110%">
                    <option selected value="null">Carte Graphique</option>
                    <?php
                    getcgselect();
                    ?>
                </select>
                <select class="custom-select" id="ecranselect">
                    <option selected value="null">Ecran</option>
                    <?php
                    getecranselect();
                    ?>
                </select>
                <button type="button" class="btn btn-primary btn-block" onclick="search()">Chercher </button>
            </div>
        </div>
    </div>
</div>