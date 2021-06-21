<?php require 'header.php' ?>

<div class="container pt-5">
        <div class="row mt-5">
            <div class="col-4 offset-1" id="leftSide">
                <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
            </div>
            <div class="col-6 card">
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">Inscrivez-vous!</h1>
                    <form action="index.php" method="POST">

                        </select>
                        <!--Pseudo-->
                        <div class="mb-3">
                            <label for="nickname" class="form-label">Pseudo : </label>
                            <input type="nickname" class="form-control" id="nickname" name="nickname"  aria-describedby="nicknameHelp" >
                        </div>  
                        <!--email -->
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail">
                        </div>
                        <!--Password-->
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="inputPassword">
                        </div>
                        <!--Ville-->
                        <div class="mb-3">
                            <label for="inputCity" class="form-label">Ville</label>
                            <input type="text" class="form-control" name="inputCity" id="inputCity">
                        </div>
                        <!--Age -->
                        <div class="mb-3">
                            <label for="age" class="form-label">Age : </label>
                            <input type="number" class="form-control" id="age" name="age" value=""/>
                        </div>
                        <!--photo-->
                        <div class="mb-3">
                            <label for="photo">Photo de profil</label>
                            <input type="file" class="form-control-file" id="pictureFile">
                            </div>
                        <!--type -->
                        <div class="mb-3">
                            <p>Vous êtes</p>
                            <div class="mb-3 form-check"> 
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="canide" checked>
                                <label class="form-check-label" for="radio1">
                                    Un canidé
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios" value="felide">
                                <label class="form-check-label" for="radio1">
                                    Un félidé
                                </label>
                            </div>
                        </div>  
                        <div class="mb-3 inputSexe">
                            <p>Vous vous considérez comme :</p>
                            <div>
                                <input type="radio" id="sexChoice1"
                                name="sex" value="Mâle">
                                <label for="sexChoice1">Mâle</label>
                            </div>
                            <div>
                                <input type="radio" id="sexChoice2"
                                name="sex" value="female">
                                <label for="sexChoice2">Femelle</label>
                            </div>
                            <div>
                                <input type="radio" id="sexChoice3"
                                name="sex" value="nonBinary">
                                <label for="sexChoice3">Non Binaire</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="login">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





<?php require 'footer.php' ?> 
