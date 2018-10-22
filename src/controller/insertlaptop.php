<!DOCTYPE html>
<html lang="fr">

<?php
include_once("../model/laptopmodel.php");
include_once("../views/head.html");
include_once('../model/getDatabase.php');
if (!isset($bdd)) {
    $bdd = getDatabase();
}
?>

<body id="page-top">

<?php
require("../views/navbar.php");

if (isset($_POST["submit"])) {
    if (isset($_POST["marque"])&&!empty($_POST["marque"])&&
        isset($_POST["nom"])&&!empty($_POST["nom"])&&
        isset($_POST["prix"])&&!empty($_POST["prix"])&&
        isset($_POST["taille"])&&!empty($_POST["taille"])&&
        isset($_POST["def"])&&!empty($_POST["def"])&&
        isset($_POST["ram"])&&!empty($_POST["ram"])&&
        isset($_POST["processeur"])&&!empty($_POST["processeur"])&&
        isset($_POST["cg"])&&!empty($_POST["cg"])&&
        isset($_POST["ecran"])&&!empty($_POST["ecran"])&&
        isset($_POST["etat"])&&!empty($_POST["etat"])&&
        isset($_POST["poids"])&&!empty($_POST["poids"])&&
        isset($_POST["url1"])&&!empty($_POST["url1"])) {
        $id_marque=$_POST["marque"];
        $nom = htmlspecialchars($_POST["nom"]);
        $prix=$_POST["prix"];
        $taille=$_POST["taille"];
        $def=$_POST["def"];
        $ram=$_POST["ram"];
        $id_processeur=$_POST["processeur"];
        $id_cg=$_POST["cg"];
        $poids=$_POST["poids"];
        $id_ecran=$_POST["ecran"];
        $stoSSD = $_POST["GOSSD"];
        $stoHDD = $_POST["GOHDD"];

        if ($_POST["DD"]="NoDD"){
            if ($_POST["SSD"]="NoSSD"){
                $id_stockage=6;
            }
            elseif ($_POST["SSD"]="SATA"){
                $id_stockage=2;
            }
            elseif ($_POST["SSD"]="M2"){
                $id_stockage=4;

            }
            else {
                throw new Exception('Mauvais stockage');
            }
        }
        elseif ($_POST["DD"]="DD"){
            if ($_POST["SSD"]="NoSSD"){
                $id_stockage=1;

            }
            elseif ($_POST["SSD"]="SATA"){
                $id_stockage=3;

            }
            elseif ($_POST["SSD"]="M2"){
                $id_stockage=5;
            }
            else {
                throw new Exception('Mauvais stockage');
            }
        }
        $etat=$_POST["etat"];
        $url1 = htmlspecialchars($_POST["url1"]);
        $url2 = htmlspecialchars($_POST["url2"]);
        $url3 = htmlspecialchars($_POST["url2"]);
        $id_user=$_SESSION['id_user'];
        if (insertlaptop($nom,$prix,$taille,$def,$ram,$stoHDD,$stoSSD,$poids,$etat,$url1,$url2,$url3,$id_user,$id_marque,$id_cg,$id_stockage,$id_ecran,$id_processeur)){
            header("Location:index.php");
        }


    } else {
        echo "<div class='container'><div class='d-block centrer mt-2'><p>Veuillez remplir tous les champs</p></div></div>";
        require("../views/laptopform.php");
    }

} else {
    require("../views/laptopform.php");
}


include_once("../views/scripts.php");
?>

</body>

<?php
include_once("../views/footer.php");
?>

</html>