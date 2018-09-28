<!DOCTYPE html>
<html lang="en">

<?php
include_once("src/views/head.html");
?>

  <body>

    <!-- Navigation -->
    <?php
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
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
