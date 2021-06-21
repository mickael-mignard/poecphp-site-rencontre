<?php require 'header.php' ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-4 offset-1" id="leftSide">
            <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
        </div>
        <div class="col-6 card">
            <div class="card-body">
                <h1 class="card-title h2 mb-5 ">Connectez-vous au site 3C </h1>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Pseudo : </label>
                        <input type="nickname" class="form-control" id="nickname" name="nickname" aria-describedby="nicknameHelp">
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="inputPassword1">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="login">Se connecter</button>
                            <button class="btn btn-secondary" type="submit" name="subscribe">Créer son profil</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>