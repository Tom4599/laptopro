<?php
session_start();
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/laptopro/index.php">Laptopro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/laptopro/index.php">Acceuil <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/laptopro/admin/admin.php">Statistiques <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/laptopro/admin/admin_annonces.php">Annonces <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/laptopro/admin/admin_user.php">Utilisateurs <span class="sr-only"></span></a>
            </li>

        </ul>
    </div>
</nav>