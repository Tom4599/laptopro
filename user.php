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

<!-- Page Content -->
<?php
if (isset($_GET['id'])){
    if ($_GET['id']==$_SESSION['id_user']){
        require_once('src/views/userself.php');
    }
    else{
        require_once('src/views/user.php');
    }
}
else{
    require_once('src/views/userself.php');
}
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
