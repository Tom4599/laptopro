<!DOCTYPE html>
<html lang="en">

<?php
include_once("src/views/head.html");
?>

  <body>

    <!-- Navigation -->
    <?php
    require_once("src/views/navbar.html")
    ?>
    <header>
        <?php
        require_once("src/views/carousel.php");
        ?>
    </header>

    <div class="panel panel-primary">
        <div class="panel-heading">Recherche / Filtres</div>
        <div class="panel-body">
        <span class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">Angular</a></li>
            </ul>
        </span>
        </div>
    </div>

    <!-- Page Content -->

    <?php
    require_once("src/views/products.php");
    ?>

    <!-- Footer -->
    <?php
    require_once("src/views/footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
    require_once("src/views/scripts.php");
    ?>
  </body>

</html>
