<!DOCTYPE html>
<html lang="en">

<?php
include_once("../src/views/head.html");
?>
<body>
<!-- Navigation -->
<?php
require_once("../src/views/navbar_admin.php")
?>


<!-- Page Content -->

<?php
require_once("../src/views/admin.php");
?>

<!-- Footer -->
<?php
require_once("../src/views/footer.php");
?>

<!-- Bootstrap core JavaScript -->
<?php
require_once("../src/views/scripts.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="../src/views/js/admin.js"></script>
</body>

</html>
