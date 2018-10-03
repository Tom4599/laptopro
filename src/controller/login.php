<!DOCTYPE html>
<html lang="fr">

  <?php
    session_start();
    include("../model/getUserByMail.php");
    require("../views/head.html");
    include_once('../model/getDatabase.php');
    if (!isset($bdd)) {
        $bdd = getDatabase();
    }
  ?>

  <body id="page-top">

    <?php
        require("../views/navbar.php");

        if (isset($_POST["submit"])) {
          
          $emaillogin = htmlspecialchars($_POST['maillogin']);
          $pwlogin = sha1($_POST['pwlogin']);
          
          $result = getUserByMail($emaillogin, $bdd);

          // If everything is ok
          if (!empty($result)) {
              $userinfo = getUserByMail($emaillogin, $bdd);
              if ($userinfo["password"] == $pwlogin) {
                // All the user data is in the $_SESSION[]
                $_SESSION = $userinfo;
                //echo '<script>alert("Vous êtes maintenant connecter");</script>';
                  header("Location:../../index.php");
              } else {
                echo "<div class='container'><div class='d-block centrer mt-2'><p>Le mot de passe est incorrect</p></div></div>";
                require("../views/form/formlogin.php");
              }
          } else {
            echo "<div class='container'><div class='d-block centrer mt-2'><p>Le mail donné n'existe pas</p></div></div>";
            require("../views/form/formlogin.php");
          }
        } else {
            require_once("../views/form/formlogin.php");
        }

        require("../views/scripts.php");
    ?>

  </body>

  <?php
    require("../views/footer.php");
  ?>

</html>