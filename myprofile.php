<?php require 'header.php' ?>

<div class="container pt-5">
        <div class="row mt-5">
            <div class="col-4 offset-1" id="leftSide">
                <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
            </div>
            <div class="col-6 card">
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">😺 Mise à jours de mon profil 🐶</h1>
                    <form action="index.php" method="POST">

                        </select>
                        <!--Pseudo-->
             
                        <div class="mb-3">
                            <label for="height" class="form-label">Ma taille (au garot et en CM) : </label>
                            <input type="number" class="form-control" id="height" name="height"  aria-describedby="numberHelp" >
                        </div>  
                        <!--yeux -->
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputEyeColor">
                                <option selected>Couleur de mes yeux</option>
                                    <option value="bleu">Bleu</option>
                                    <option value="vert">Vert</option>
                                    <option value="jaune">Jaune</option>
                                    <option value="marron">Marron</option>
                                    <option value="autre">Autre</option>
                            </select>
                        </div>

                        <!--Pelage-->
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputHairColor">
                            <option selected>Couleur de mon pelage</option>
                            <option value = "black">Noir</option>
                            <option value = "white" >Blanc</option>
                            <option value = "marron">Marron</option>
                            <option value = "bicolor">Bicolore</option>
                            <option value = "turtle">Ecaille de tortue</option>
                            <option value = "other">Autre</option>
                            </select>
                        </div>

                        <!--j'adore-->
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputFav">
                            <option selected>J'adore</option>
                                <option value="balle">Jouer à la balle</option>
                                <option value="course">Courrir à en perdre haleine</option>
                                <option value="sleep">Dormir</option>
                                <option value="out">Les sorties</option>
                                <option value="oups">Faire mes griffes / grignoter tout ce qui passe à porté</option>
                                <option value="other">Autre</option>
                                </select>
                        </div>
                        <!--je déteste -->
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputHate">
                            <option selected>Je déteste</option>
                                <option value="leash">Les laisses</option>
                                <option value="lieDown">Dormir par terre</option>
                                <option value="eatFood">Manger de la patée</option>
                                <option value="rain">La pluie</option>
                                <option value="colar">Les colliers </option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        <!--Plat préféré -->
                        <div class="input-group mb-3">
                            <select class="form-select" id="inputFavFood">
                            <option selected>Ma nourriture préférée</option>
                                <option value="leek">La tarte aux poireaux et jus de poubelle</option>
                                <option value="ragoutout">Le RagouTouTou... j'en suis fou !</option>
                                <option value="critter">Les oiseaux, mulots et autres petits animaux</option>
                                <option value="milk">Le lait</option>
                                <option value="other">Autre</option>
                                </select>
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