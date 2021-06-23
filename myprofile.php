<?php require 'header.php';

//Tableaux pour les menus déroulants de la page myProfile
$eyeColor = ['Bleu', 'Vert', 'Jaune', 'Marron', 'Autre'];
$hairColor = ['Noir', 'Blanc', 'Marron', 'Bi-Colore', 'Ecaille de tortue', 'Autre'];
$loving = ['Jouer à la balle', 'Courrir à en perdre l\'haleine', 'Dormir', 'Sorties', 'Faire mes griffes/ grignoter les chaussures', 'Autre'];
$hating = ['Les laisses', 'Dormir par terre', 'Manger de la patée', 'La pluie', 'Les colliers', 'Autre'];
$food = ['La tarte aux poireaux et jus de poubelle', 'Le RagouToutou... j\'en suis fou !', 'Les oiseaux, mulots et autres petits animaux', 'Le lait', 'Autre'];

//Appel du Json pour récupérer et mettre à jour les valeurs 
$editProfil = file_get_contents('db.json');
$profilArray = json_decode($editProfil, true);

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}

if (isset($_POST['editProfil']) && isset($_SESSION['id'])) {
    $profilArray[$id]['eyeColor'] = $eyeColor = htmlspecialchars($_POST['eyeColor']);
    $profilArray[$id]['hairColor']  = $hairColor = htmlspecialchars($_POST['hairColor']);
    $profilArray[$id]['loving']  = $loving = htmlspecialchars($_POST['loving']);
    $profilArray[$id]['hating']  = $hating = htmlspecialchars($_POST['hating']);
    $profilArray[$id]['food']  = $food = htmlspecialchars($_POST['food']);
    $profilArray[$id]['description'] = $description = htmlspecialchars($_POST['description']);

    $userJson = json_encode($profilArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    file_put_contents('db.json', $userJson);

    foreach ($profilArray as $profile) {
        if ($profile['eyeColor'] == $_POST['eyeColor'] && $profile['hairColor'] == $profile['hairColor'] && $profile['loving'] == $profile['loving'] && $profile['hating'] == $profile['hating'] && $profile['food'] == $profile['food']) {
            $_SESSION['eyeColor'] = $_POST['eyeColor'];
            $_SESSION['hairColor'] = $_POST['hairColor'];
            $_SESSION['loving'] = $_POST['loving'];
            $_SESSION['hating'] = $_POST['hating'];
            $_SESSION['food'] = $_POST['food'];

            header('Location: index.php');
        }
    }
}

//Afficher le profil 
$formError = [];
if (!isset($_POST['editProfil']) && isset($_SESSION['nickname'])) { ?>
    <section>
        <div class="container text-center">
            <h2 class="fs-1 mt-3">Rappel de mes informations :</h2>
            <?php

            for ($i = 0; $i < count($profilArray); $i++) {
                if ($_SESSION['nickname'] == $profilArray[$i]['nickname']) {
                    foreach ($profilArray as $key => $value) { ?>

                        <ul>
                            <li> <strong>Pseudo :</strong> <?= $profilArray[$i]['nickname'] ?> </li>
                            <li><strong>Couleur de mes yeux :</strong> <?= $profilArray[$i]['eyeColor'] ?></li>
                            <li><strong>Couleur de mon pelage :</strong> <?= $profilArray[$i]['hairColor'] ?></li>
                            <li><strong>J'adore :</strong> <?= $profilArray[$i]['loving'] ?></li>
                            <li><strong>Je déteste :</strong> <?= $profilArray[$i]['hating'] ?></li>
                            <li><strong>Ma nourriture préférée :</strong> <?= $profilArray[$i]['food'] ?></li>
                            <li><strong>Courte description :</strong> <?= $profilArray[$i]['description'] ?></li>
                        </ul>

        </div>
    </section>
<?php
                        break;
                    }
                }
            }
        }
?>

<!--Editer le profil-->
<div class="container pt-5">
    <div class="row mt-5">
        <div class="col-4 offset-1" id="leftSide">
            <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
        </div>
        <div class="col-6 card">
            <div class="card-body">
                <h1 class="card-title h2 mb-5 ">😺 Mise à jour de mon profil 🐶</h1>
                <form action="#" method="POST">

                    </select>

                    <!--yeux -->
                    <div class="input-group mb-3">
                        <label for="eyeColor">Mes yeux sont : </label>
                        <select name="eyeColor" id="eyeColor">
                            <option value="" <?= !isset($eyeColor) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre couleur</option>
                            <?php
                            foreach ($eyeColor as $value) { ?>
                                <option <?= (isset($eyeColor) && $eyeColor == $value) ? 'selected' : ''; ?> value="<?= $value  ?>"><?= $value  ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--Pelage-->
                    <div class="input-group mb-3">
                    <label for="hairColor">Mon pelage est : </label>
                    <select name="hairColor" id="hairColor">
                        <option value="" <?= !isset($hairColor) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre pelage</option>
                        <?php
                        foreach ($hairColor as $value) { ?>
                            <option <?= (isset($hairColor) && $hairColor == $value) ? 'selected' : ''; ?> value="<?= $value ?>"><?= $value ?></option>
                        <?php } ?>
                    </select>
                    </div>

                    <!--j'adore-->
                    <div class="input-group mb-3">
                        <label for="hating">J'adore : </label>
                        <select name="loving" id="hairColor">
                            <option value="" <?= !isset($loving) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre péché mignon</option>
                            <?php
                            foreach ($loving as $value) { ?>
                                <option <?= (isset($loving) && $loving == $value) ? 'selected' : ''; ?> value="<?= $value  ?>"><?= $value  ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--je déteste -->
                    <div class="input-group mb-3">
                        <label for="hating">Je déteste: </label>
                        <select name="hating" id="hating">
                            <option value="" <?= !isset($hating) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre némésis </option>
                            <?php
                            foreach ($hating as $value) { ?>
                                <option <?= (isset($hating) && $hating == $value) ? 'selected' : ''; ?> value="<?= $value  ?>"><?= $value  ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--Plat préféré -->
                    <div class="input-group mb-3">
                        <label for="food">Ma nourriture préférée : </label>
                        <select name="food" id="food">
                            <option value="" <?= !isset($food) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre plat</option>
                            <?php
                            foreach ($food as $value) { ?>
                                <option <?= (isset($food) && $food == $value) ? 'selected' : ''; ?> value="<?= $value  ?>"><?= $value  ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <!--Plat préféré -->
                    <div class="input-group mb-3">
                        <label for="description">Courte présentation : </label>                       
                        <textarea name="description" id="description" cols="25" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-secondary" type="submit" name="editProfil">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--
Une fois loggué, on veut récupérer les informations du json correspondant à la persoqnne connectée.

 - 1 / il faut afficher le pseudo du loggué
 - si on affiche le pseudo, on peut afficher le reste....
-->
<?php require 'footer.php'; ?>