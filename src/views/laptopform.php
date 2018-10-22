<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/laptopro/src/controller/itemcontroller.php");
require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/itemmodel.php");
?>
<div class="container">
    <form action="src/controller/insertlaptop.php" method="post">
        <div class="row mt-4">
            <div class="col-md-3">
                <label for="marque">Marque de votre Pc : </label>
                <select class="custom-select" id="inputGroupSelect01" name="marque">
                    <option value="null" selected>Marque</option>
                    <?php
                    getmarqueselect();
                    ?>
                </select>
            </div>
            <div class="col-md-9">
                <label for="nom">Nom du PC : </label>
                <input class="form-control" name="nom" placeholder="ex : Notebook 6" required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <label for="prix">Prix : </label>

                <div class="input-group mb-3">
                    <input type="number" min="0" class="form-control" name="prix" placeholder="10J = 100€" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Jetons</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <label for="taille">taille : </label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="taille" min="7" max="42" value="15" placeholder="En Pouces" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Pouces</span>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <label for="tel">Definition : </label>
                <select class="custom-select" id="inputGroupSelect01" name="def">
                    <option >1280*720</option>
                    <option selected>1920*1080</option>
                    <option >4K</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="tel">Ram : </label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="ram" min=0" max="128" value="4" placeholder="Mémoire Vive" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">Giga</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <label>Processeur : </label>
                <select class="custom-select" id="inputGroupSelect01" name="processeur">
                    <option value="null" selected>Processeur</option>
                    <?php
                    getprocesseurselect();
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="poids">Carte graphique : </label>
                <select class="custom-select" id="inputGroupSelect01" style="width:110%" name="cg">
                    <option value="null" selected>Carte Graphique</option>
                    <?php
                    getcgselect();
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="poids">Poids : </label>
                <select class="custom-select" id="inputGroupSelect01" name="poids">
                    <option value="null" selected>Poids</option>
                    <option value="2KG ou +">2KG ou +</option>
                    <option value="Entre 1 et 2 KG">Entre 1 et 2 KG</option>
                    <option value="Environ 1 KG" >Environ 1 KG</option>
                    <option value="Moins de 1KG">Moins de 1KG</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="poids">Ecran : </label>
                <select class="custom-select" id="inputGroupSelect01" name="ecran">
                    <option selected>Ecran</option>
                    <?php
                    getecranselect();
                    ?>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="DD" id="DDN" value="NoDD" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        Aucun Disque Dur
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="DD" id="DDY" value="DD">
                    <label class="form-check-label" for="exampleRadios2">
                        Disque(s) dur(s) présent(s)
                    </label>
                </div>
                <div class="row" id="DDGO">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Capacité(Go) de vos Disque(s) Dur(s) : </span>
                        </div>
                        <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="2500" value="null" name="GOHDD">

                    </div>
                    <small>Info : 1To = 1000Go</small>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="SSD" id="SSDN" value="NoSSD" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        Aucun SSD présent
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="SSD" id="SSDY" value="SATA">
                    <label class="form-check-label" for="exampleRadios2">
                        SSD SATA
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="SSD" id="SSDY" value="M2">
                    <label class="form-check-label" for="exampleRadios2">
                        SSD M.2
                    </label>
                </div>
                <div class="row" id="SSDGO">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Capacité(Go) de vos SSD : </span>
                        </div>
                        <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="250" value="null" name="GOSSD">

                    </div>
                    <small> Info 1To = 1000Go</small>
                </div>

            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <label for="tel">Etat : </label>
                <select class="custom-select" id="inputGroupSelect01" name="etat" required>
                    <option value="4">Neuf</option>
                    <option value="3">Bon état</option>
                    <option value="2" >Moyen</option>
                    <option value="1">Mauvais état</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="url">Url Photos </label>
                <input type="url" name="url1" class="form-control" placeholder="http://image.com/image1.png" required>
                <input type="url" name="url2" class="form-control" placeholder="http://image.com/image2.png">
                <input type="url" name="url3" class="form-control" placeholder="http://image.com/image3.png">
            </div>
        </div>

            <br><br>
            <button type="submit" class="form-control btn btn-primary mb-3" name="submit">
                Envoyer
            </button>
    </form>
</div>