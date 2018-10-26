<?php
require_once("../src/controller/laptopcontroller.php");
require_once("../src/model/laptopmodel.php");

$laptoptab=getalllaptoptab();
?>

<table id="user_table" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Marque</th>
        <th>Prix</th>
        <th>Date de post</th>
        <th>Vendeur</th>
        <th>Détails</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?=$laptoptab?>
    </tbody>
</table>
