<?php require 'header.php' ?>

<?php
$userList = file_get_contents('db.json');
$userArray = json_decode($userList, true);

if(isset($_POST['connexion'])){
    $formErrors = [];
    $regexNickname = '/^[a-zA-Z0-9àâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý \-]+$/';
    // nickname
    if (!empty($_POST['nickname'])) {
        if (preg_match($regexNickname, $_POST['nickname'])) {
            $nickname = htmlspecialchars($_POST['nickname']);
        } else {
            $formErrors['nickname'] = 'Merci de ne renseigner que des lettres et des chiffres';
        }        
    } else {
        $formErrors['nickname'] = 'Veuillez entrer votre pseudo';
    }  
    // password
    if (!empty($_POST['password'])) { 
           $password = htmlspecialchars($_POST['password']);   
    } else {
        $formErrors['password'] = 'Veuillez entrer votre mot de passe';
    }

    for($i = 0; $i < count($userArray); $i++){
        if($userArray[$i]['nickname'] == $_POST['nickname'] && $userArray[$i]['password'] == $_POST['password']){
            $_SESSION['nickname'] = $_POST['nickname']; 
            $_SESSION['id'] = $i;
            header('location: index.php');      
        }else{
            $formErrors['connection'] = 'Vous avez mal tapé votre pseudo ou votre mot de passe. Veuillez réessayer.';
        }
    }   
}
if(isset($_POST['subscribe']) && empty($formErrors)){
    header('location: subscription.php');
}

?>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-4 offset-1" id="leftSide">
            <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
        </div>
        <div class="col-6 card">
            <div class="card-body">
                <h1 class="card-title h2 mb-5 ">Connectez-vous au site 3C </h1>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Pseudo</label>
                        <input type="nickname" class="form-control" id="nickname" name="nickname" aria-describedby="nicknameHelp">
                        <p class="formErrors"><?= (isset($formErrors['nickname'])) ? $formErrors['nickname'] : ''; ?></p>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="inputPassword1">
                            <p class="formErrors"><?= (isset($formErrors['password'])) ? $formErrors['password'] : ''; ?></p>
                        </div>
                            <p class="formErrors"><?= (isset($formErrors['connection'])) ? $formErrors['connection'] : ''; ?></p>
                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="subscribe">Inscription</button>
                            <button class="btn btn-secondary" type="submit" name="connexion">Connexion</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>