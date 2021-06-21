<?php require 'header.php' ?>

<div class="container pt-5">
        <div class="row mt-5">
            <div class="col-4 offset-1" id="leftSide">
                <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
            </div>
            <div class="col-6 card">
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">😺 Mettez à jours votre profil 🐶</h1>
                    <form action="index.php" method="POST">

                        </select>
                        <!--Pseudo-->
                        <div class="mb-3">
                            <label for="height" class="form-label">Votre taille (au garot) : </label>
                            <input type="number" class="form-control" id="height" name="height"  aria-describedby="numberHelp" >
                        </div>  
                        <!--yeux -->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Couleur des yeux</label>
                                <select class="form-control form-control-lg" id="formControlColor">
                                <option>Bleu</option>
                                <option>Vert</option>
                                <option>Jaune</option>
                                <option>Marron</option>
                                <option>Autre</option>
                                </select>
                            </div>
                        </div>

                        <!--Pelage-->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Couleur de votre pelage</label>
                                <select class="form-control form-control-lg" id="formControlColor">
                                <option>Noir</option>
                                <option>Blanc</option>
                                <option>Marron</option>
                                <option>Bicolore</option>
                                <option>Ecaille de tortue</option>
                                <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <!--j'adore-->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">J'adore le plus</label>
                                <select class="form-control form-control-lg" id="formControlLove">
                                <option>Jouer à la balle</option>
                                <option>Courrir à en perdre haleine</option>
                                <option>Dormir</option>
                                <option>Les sorties</option>
                                <option>Faire mes griffes / grignoter tout ce qui passe à porté</option>
                                <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <!--je déteste -->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Je déteste</label>
                                <select class="form-control form-control-lg" id="formControlHate">
                                <option>Les laisses</option>
                                <option>Dormir par terre</option>
                                <option>Manger de la patée</option>
                                <option>La pluie</option>
                                <option>Les colliers </option>
                                <option>Autre</option>
                                </select>
                            </div>
                        </div>
                        <!--Plat préféré -->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Mon plat préféré</label>
                                <select class="form-control form-control-lg" id="formControlFood">
                                <option>La tarte aux poireaux et jus de poubelle</option>
                                <option>Le RagouTouTou... j'en suis fou !</option>
                                <option>Les oiseaux, mulots et autres petits animaux</option>
                                <option>Le lait</option>
                                <option>Autre</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="login">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php' ?>