<?php
require_once("../src/controller/userlaptopcontroller.php");
require_once("../src/model/usermodel.php");

$usertab=getallusertab();
?>

<table id="user_table" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Mail</th>
        <th>CP</th>
        <th>Ville</th>
        <th>Adresse</th>
        <th>Solde</th>
        <th>Solde Bloqué</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?=$usertab?>
    </tbody>
</table>
