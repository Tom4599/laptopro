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
                    <option selected>Choose...</option>
                    <option value="1">chose</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">truc</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
</div>