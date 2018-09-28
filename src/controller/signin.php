<!DOCTYPE html>
<html lang="fr">

  <?php
    session_start();
    include("../model/insertUser.php");
    require("../views/head.php");
  ?>

  <body id="page-top">

    <?php
        require("../views/menu.php");

        if (isset($_POST["submit"])) {
          if (isset($_POST["nom"])&&!empty($_POST["nom"])&&
          isset($_POST["prenom"])&&!empty($_POST["prenom"])&&
          isset($_POST["mail"])&&!empty($_POST["mail"])&&
          isset($_POST["tel"])&&!empty($_POST["tel"])&&
          isset($_POST["password"])&&!empty($_POST["password"])&&
          isset($_POST["password2"])&&!empty($_POST["password2"])&&
          isset($_POST["date_naissance"])&&!empty($_POST["date_naissance"])&&
          isset($_POST["ville_naissance"])&&!empty($_POST["ville_naissance"])&&
          isset($_POST["adresse"])&&!empty($_POST["adresse"])&&
          isset($_POST["poids"])&&!empty($_POST["poids"])) {
            $nom = htmlspecialchars($_POST["nom"]);
            $prenom = htmlspecialchars($_POST["prenom"]);
            $mail = htmlspecialchars($_POST["mail"]);
            $tel = htmlspecialchars($_POST["tel"]);
            $password = htmlspecialchars($_POST["password"]);
            $password2 = htmlspecialchars($_POST["password2"]);
            $date_naissance = htmlspecialchars($_POST["date_naissance"]);
            $ville_naissance = htmlspecialchars($_POST["ville_naissance"]);
            $adresse = htmlspecialchars($_POST["adresse"]);
            $poids = htmlspecialchars($_POST["poids"]);
            if ($password == $password2) {
              $password = sha1($password);
              $regex = "#^[\w\-\+]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,4}$#";
              if (preg_match($regex,$mail)) {
                if (strlen($tel) == 10) {
                  $arraydate = explode("/",$date_naissance);
                  $date_naissance = $arraydate[2]."-".$arraydate[1]."-".$arraydate[0];
                  insertUser($userkey,$nom,$prenom,$mail,$tel,$password,$date_naissance,$ville_naissance,$adresse,$poids,$bdd);
                  header("Location:login.php");
                } else {
                  echo "<div class='container'><div class='d-block centrer mt-2'><p>Le téléphone est incorrect</p></div></div>";
                  require("../views/form/formregister.php");
                }
                
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
        

        require("../views/script.php");
    ?>

  </body>

  <?php
    require("../views/footer.php");
  ?>

</html>