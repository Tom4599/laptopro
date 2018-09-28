<div class="container">
    <form action="../controller/signin.php" method="post">
        <div class="row mt-4">
            <div class="col-md-6">
                <label for="nom">Nom : </label>
                <input class="form-control" name="nom" placeholder="Votre nom..." required autofocus>
            </div>
            <div class="col-md-6">
                <label for="prenom">Prénom : </label>
                <input class="form-control" name="prenom" placeholder="Votre prénom..." required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9">
                <label for="mail">Email : </label>
                <input class="form-control" name="mail" placeholder="Votre mail ..." required>
            </div>
            <div class="col-md-3">
                <label for="tel">Adresse : </label>
                <input class="form-control" name="adresse" placeholder="Votre adresse..." required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <label for="password">Mot de passe : </label>
                <input type="password" name="password" class="form-control" placeholder="Votre mot de passe..." required>
            </div>
            <div class="col-md-6">
                <label for="password2">Confirmez votre mot de passe : </label>
                <input type="password" name="password2" class="form-control" placeholder="Votre mot de passe..." required>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <label for="poids">Ville</label>
                <input type="input" name="ville" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="adresse">Code Postal</label>
                <input type="input" name="cp" class="form-control" placeholder="34000" required>
            </div>
        </div>
        
            <br><br>
            <button type="submit" class="form-control btn btn-primary mb-3" name="submit">
                M'inscrire
            </button>
    </form>
</div>