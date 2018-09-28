<!DOCTYPE html>
<html lang="fr">

  <?php
    session_start();
    include_once("../model/insertUser.php");
    include_once("../views/head.html");
    include_once('../model/getDatabase.php');
    if (!isset($bdd)) {
//       $bdd = getDatabase();
    }
  ?>

  <body id="page-top">

    <?php
        require("../views/navbar.php");

        if (isset($_POST["submit"])) {
          if (isset($_POST["nom"])&&!empty($_POST["nom"])&&
          isset($_POST["prenom"])&&!empty($_POST["prenom"])&&
          isset($_POST["mail"])&&!empty($_POST["mail"])&&
          isset($_POST["adresse"])&&!empty($_POST["adresse"])&&
          isset($_POST["password"])&&!empty($_POST["password"])&&
          isset($_POST["password2"])&&!empty($_POST["password2"])&&
          isset($_POST["cp"])&&!empty($_POST["cp"])&&
          isset($_POST["ville"])&&!empty($_POST["ville"])) {
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $adresse = htmlspecialchars($_POST["adresse"]);
            $password = htmlspecialchars($_POST["password"]);
            $password2 = htmlspecialchars($_POST["password2"]);
            $cp = htmlspecialchars($_POST["cp"]);
            $ville = htmlspecialchars($_POST["ville"]);
            if ($password == $password2) {
              $password = sha1($password);
              $regex = "#^[\w\-\+]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,4}$#";
              if (preg_match($regex,$mail)) {
                  insertUser($nom,$prenom,$adresse,$cp,$ville,$mail,$password,$bdd);
                  header("Location:login.php");
              } else {
                echo "<div class='container'><div class='d-block centrer mt-2'><p>Le mail n'est pas correct</p></div></div>";
                require("../views/form/formregister.php");
              }
              
            } else {
              echo "<div class='container'><div class='d-block centrer mt-2'><p>Vos deux mots de passe ne sont pas identiques</p></div></div>";
              require("../views/form/formregister.php");
            }
          } else {
            echo "<div class='container'><div class='d-block centrer mt-2'><p>Veuillez remplir tous les champs</p></div></div>";
            require("../views/form/formregister.php");
          }
          
        } else {
          require("../views/form/formregister.php");
        }
        

        include_once("../views/scripts.php");
    ?>

  </body>

  <?php
    include_once("../views/footer.php");
  ?>

</html>