<?php
session_start();
?>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/laptopro/index.php">Laptopro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/laptopro/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        <?php
            if (isset($_SESSION['id_user'])){
                echo('
                <span class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/laptopro/src/controller/logout.php"><i class="fas fa-sign-in-alt"></i>Déconnexion</a>
                    </li>
                    <li class="nav-item">
        
                        <a class="nav-link" href="user.php">Moncompte</a>
                    </li>
                </span>
                ');
            }
            else{
                echo ('
                <span class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/laptopro/src/controller/signup.php"><i class="fas fa-sign-in-alt"></i> Sign Up</a>
                    </li>
                    <li class="nav-item">
        
                        <a class="nav-link" href="http://localhost/laptopro/src/controller/login.php">Login</a>
                    </li>
                </span>
                ');
            }
        ?>
    </div>
</nav>