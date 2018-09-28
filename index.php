<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php
    require_once("src/views/header.php");
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
