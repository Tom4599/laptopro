<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="../controller/login.php">
    <?php
    if (isset($redirection)) {
        echo '<input type="hidden" name="redirection" value="'.$redirection.'">';
    }
    if (isset($id_excursion)) {
        echo '<input type="hidden" name="id_excursion" value="'.$id_excursion.'">';
    }
    ?>
        <div class="row justify-content-center text-center">
            <div class="col-6 mt-4">
                <h4>Merci de vous connecter</h4>
                    <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group has-danger">
                    <label class="sr-only" for="email">E-Mail</label>
                    <p>Email</p>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-at"></i>
                        </div>
                        <input type="email" name="maillogin" class="form-control"
                        id="email" placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <p>Mot de passe</p>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-key"></i>
                        </div>
                        <input type="password" name="pwlogin" class="form-control"
                        id="password" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-3" style="padding-top: 1rem">
            <div class="col-md-6 text-center">
                <button name="submit" type="submit" class="btn btn-primary">
                    <i class="fa fa-sign-in"></i> Se connecter
                </button>
                <a class="btn btn-link" href="src/managers/resetpassword.php">Mot de passe oublié ?</a>
            </div>
        </div>
    </form>
</div>