<?php require 'header.php' ?>

<?php
$species = [
    'canide' => 'canidé',
    'felide' => 'félidé'
];
$sex = [
    'male' => 'mâle',
    'female' => 'femelle',
    'nonBinary' => 'non binaire'
];
$userJson = file_get_contents('db.json');
$userArray = json_decode($userJson, true);

if (isset($_POST['login'])) {
    $arrayLength = (string) count($userArray);

    $userArray[$arrayLength]['id'] = $arrayLength;

    $formErrors = [];
    $regexNickname = '/^[a-zA-Z0-9 \-]+$/';
    $regexCity = '/^[a-zA-Z \-]+$/';

    // Nickname
    if (!empty($_POST['nickname'])) {
        if (preg_match($regexNickname, $_POST['nickname'])) {
            $userArray[$arrayLength]['nickname'] = htmlspecialchars($_POST['nickname']);
        } else {
            $formErrors['nickname'] = 'Merci de ne renseigner que des lettres et des chiffres';
        }
    } else {
        $formErrors['nickname'] = 'Veuillez entrer votre pseudo';
    }

    // Email
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $userArray[$arrayLength]['email'] = htmlspecialchars($_POST['email']);
        } else {
            $formErrors['email'] = 'Merci de saisir un email valide';
        }
    } else {
        $formErrors['email'] = 'Veuillez saisir votre email';
    }

    // Password
    if (!empty($_POST['password'])) {
        $userArray[$arrayLength]['password'] = htmlspecialchars($_POST['password']);
    } else {
        $formErrors['password'] = 'Veuillez entrer votre mot de passe';
    }

    // City
    if (!empty($_POST['inputCity'])) {
        if (preg_match($regexCity, $_POST['inputCity'])) {
            $userArray[$arrayLength]['city'] = htmlspecialchars($_POST['inputCity']);
        } else {
            $formErrors['inputCity'] = 'Merci de ne renseigner que des lettres';
        }
    } else {
        $formErrors['inputCity'] = 'Veuillez saisir le nom de votre ville de résidence';
    }

    // Age
    if (!empty($_POST['age'])) {
        if (!is_numeric($_POST['age'])) {
            $formErrors = 'Saisissez un nombre !';
        } else {
            $userArray[$arrayLength]['age'] = htmlspecialchars($_POST['age']);
        }
    } else {
        $formErrors['age'] = 'Veuillez saisir votre âge';
    }

    // Picture file
    if (!empty($_FILES['myPictureFile'])) {               

        if ('image/jpeg' == $_FILES['myPictureFile']['type']) {
            $fileType = $_FILES['myPictureFile']['type'];
            $userArray[$arrayLength]['picture'] = $_FILES['myPictureFile']['name'];
        } else {
            $formErrors['myPictureFile'] = 'Veuillez charger un fichier jpeg';
        }

        $uploaddir = 'assets/img/';
        $uploadfile = $uploaddir . basename($_FILES['myPictureFile']['name']);
        $fileMoved = move_uploaded_file($_FILES['myPictureFile']['tmp_name'], $uploadfile);

        if(!$fileMoved){
            $formErrors['myPictureFile'] = 'Fichier non déplacé';
        }        

    } else {
        $formErrors['myPictureFile'] = 'Veuillez charger un fichier';
    }

    // Species
    if (isset($_POST['species']) && in_array($_POST['species'], $species)) {
        $userArray[$arrayLength]['species'] = htmlspecialchars($_POST['species']);
    } else {
        $formErrors['species'] = "Sélectionnez votre espèce";
    }

    // Sex
    if (isset($_POST['sex']) && in_array($_POST['sex'], $sex)) {
        $userArray[$arrayLength]['sex'] = htmlspecialchars($_POST['sex']);
    } else {
        $formErrors['sex'] = "Sélectionnez votre genre";
    }

    if (empty($formErrors)) {
        $userJson = json_encode($userArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        file_put_contents('db.json', $userJson);
    }
}
?>

<div class="container pt-5">
    <div class="row mt-5">
        <div class="col-4 offset-1" id="leftSide">
            <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
        </div>
        <div class="col-6 card">
            <div class="card-body">
                <h1 class="card-title h2 mb-5 ">Inscrivez-vous !</h1>
                <form action="#" method="POST" enctype="multipart/form-data">

                    </select>
                    <!--Pseudo-->
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Pseudo</label>
                        <input type="nickname" class="form-control" id="nickname" name="nickname" aria-describedby="nicknameHelp">
                        <p class="formErrors"><?= (isset($formErrors['nickname'])) ? $formErrors['nickname'] : ''; ?></p>
                    </div>
                    <!--email -->
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail">
                        <p class="formErrors"><?= (isset($formErrors['email'])) ? $formErrors['email'] : ''; ?></p>
                    </div>
                    <!--Password-->
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="inputPassword">
                        <p class="formErrors"><?= (isset($formErrors['password'])) ? $formErrors['password'] : ''; ?></p>
                    </div>
                    <!--Ville-->
                    <div class="mb-3">
                        <label for="inputCity" class="form-label">Ville</label>
                        <input type="text" class="form-control" name="inputCity" id="inputCity">
                        <p class="formErrors"><?= (isset($formErrors['inputCity'])) ? $formErrors['inputCity'] : ''; ?></p>
                    </div>
                    <!--Age -->
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" value="" />
                        <p class="formErrors"><?= (isset($formErrors['age'])) ? $formErrors['age'] : ''; ?></p>
                    </div>
                    <!--photo-->
                    <div class="mb-3">
                        <label for="pictureFile">Photo de profil :</label>
                        <input type="file" name="myPictureFile" class="form-control-file" id="pictureFile">
                        <p class="formErrors"><?= (isset($formErrors['pictureFile'])) ? $formErrors['pictureFile'] : ''; ?></p>
                    </div>
                    <!--type -->
                    <div class="mb-3">
                        <p>Vous êtes un :</p>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="radio" name="species" id="species1" value="<?= $species['canide'] ?>">
                            <label class="form-check-label" for="radio1"><?= $species['canide'] ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="species" id="species2" value="<?= $species['felide'] ?>">
                            <label class="form-check-label" for="radio1"><?= $species['felide'] ?></label>
                        </div>
                        <p class="formErrors"><?= (isset($formErrors['species'])) ? $formErrors['species'] : ''; ?></p>
                    </div>
                    <!-- sex -->
                    <div class="mb-3 inputSexe">
                        <p>Vous vous considérez comme :</p>
                        <div>
                            <input class="form-check-input" type="radio" id="sexChoice1" name="sex" value="<?= $sex['male'] ?>">
                            <label for="sexChoice1"><?= $sex['male'] ?></label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" id="sexChoice2" name="sex" value="<?= $sex['female'] ?>">
                            <label for="sexChoice2"><?= $sex['female'] ?></label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" id="sexChoice3" name="sex" value="<?= $sex['nonBinary'] ?>">
                            <label for="sexChoice3"><?= $sex['nonBinary'] ?></label>
                        </div>
                        <p class="formErrors"><?= (isset($formErrors['sex'])) ? $formErrors['sex'] : ''; ?></p>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-secondary" type="submit" name="login">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>