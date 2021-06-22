<?php require 'header.php'; 


$eyeColor = ['Bleu', 'Vert','Jaune','Marron' ,'Autre' ] ;

$hairColor = ['Noir','Blanc', 'Marron','Bi-Colore','Ecaille de tortue', 'Autre' ];

$loving = ['Jouer à la balle' ,'Courrir à en perdre l\'haleine', 'Dormir', 'Sorties','Faire mes griffes/ grignoter les chaussures', 'Autre' ];

$hating =['Les laisses', 'Dormir par terre','Manger de la patée', 'La pluie','Les colliers','Autre'];

$food = ['La tarte aux poireaux et jus de poubelle','Le RagouToutou... j\'en suis fou !','Les oiseaux, mulots et autres petits animaux', 'Le lait','Autre'];


$editProfil = file_get_contents('db.json');
$profilArray = json_decode($editProfil, true);
if(isset($_POST['editProfil'])){
            $eyeColor = htmlspecialchars($_POST['eyeColor']);
            $hairColor = htmlspecialchars($_POST['hairColor']);
            $loving = htmlspecialchars($_POST['loving']);
            $hating = htmlspecialchars($_POST['hating']);
            $food = htmlspecialchars($_POST['food']);
            //$taille = int($_POST['food'])
            foreach($profilArray as $profile ){
            if($profile['eyeColor'] == $_POST['eyeColor'] && $profile['hairColor'] == $profile['hairColor'] && $profile['loving'] == $profile['loving'] && $profile['hating'] == $profile['hating'] && $profile['food'] == $profile['food']) {
                $_SESSION['eyeColor'] = $_POST['eyeColor']; 
                $_SESSION['hairColor'] = $_POST['hairColor']; 
                $_SESSION['loving'] = $_POST['loving']; 
                $_SESSION['hating'] = $_POST['hating']; 
                $_SESSION['food'] = $_POST['food']; 

                header('location: index.php');      
            }
        }
    }
?>
<!--Afficher le profil -->
<p>Rappel de mon profil</p>
<?php

for ($i = 0 ; $i < count($profilArray) ; $i++){
    if($_SESSION['nickname'] == $profilArray[$i]['nickname'] ){
        foreach ($profilArray as $key => $value) { ?>

        <ul>    
                <li> Pseudo : <?=$profilArray[$i]['nickname'] ?> </li>
                <li>Couleur de mes yeux : <?=$profilArray[$i]['eyeColor'] ?></li>
                <li>Couleur de mon pelage : <?=$profilArray[$i]['hairColor'] ?></li>
                <li>J'adore : <?=$profilArray[$i]['loving'] ?></li>
                <li>Je déteste : <?=$profilArray[$i]['hating'] ?></li>
                <li>Ma nourriture préférée : <?=$profilArray[$i]['food'] ?></li>
        </ul>
        
<?php
             break;
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
                    <form action="index.php" method="POST">

                        </select>
                        <!--Taille-->
             
                        <div class="mb-3">
                            <label for="height" class="form-label">Ma taille (au garot et en CM) : </label>
                            <input type="number" class="form-control" id="height" name="height"  aria-describedby="numberHelp" >
                        </div>  
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

                        <label for="hairColor">Mon pelage est : </label>
                        <select name="hairColor" id="hairColor">
                            <option value="" <?= !isset($hairColor) ? 'selected' : ''; ?> disabled selected>Sélectionnez votre pelage</option>
                            <?php
                            foreach ($hairColor as $value) { ?>
                                <option <?= (isset($hairColor) && $hairColor == $value) ? 'selected' : ''; ?> value="<?= $value ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>

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