<!DOCTYPE html>
<html lang="en">

<?php
include_once("src/views/head.html");
?>
  <body>
    <!-- Navigation -->
    <?php
    require_once("src/views/navbar.php")
    ?>
    <header>
        <?php
        require_once("src/views/carousel.php");
        ?>
    </header>
    <a>
    <?php
    require_once("src/views/search.php");
    ?>
    </a>

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
