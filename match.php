<?php require 'header.php' ?>

<?php
$json = file_get_contents('db.json');
$userArray = json_decode($json, true);

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}

// Love, hate and food preferences of the logged user are compared with all the others users.
// The position in the array is equal to the id of the users. If there is a match, the value associated is incremented.
$matchs = [];
for($i = 0; $i < count($userArray); $i++){

    $compteur = 0;

    if($userArray[$id]['loving'] == $userArray[$i]['loving'] && $id != $i){
        $compteur++;
    }
    if($userArray[$id]['hating'] == $userArray[$i]['hating'] && $id != $i){
        $compteur++;
    }
    if($userArray[$id]['food'] == $userArray[$i]['food'] && $id != $i){
        $compteur++;        
    }
    $matchs[$i] = $compteur;

}

// If some users have at least one thing in common, they are added in the array $matchingUsers
$matchingUsers = [];
foreach($matchs as $key => $match){
    if($match > 0){
        $matchingUsers[] = $key;
    }
}

/**
 * Get a user in JSON file by ID.
 * @param $id user's id
 * @param $array JSON file converted in an array
 * @return $user user in the JSON file
 */
function getUserById($id, $array) {
    foreach($array as $index => $user) {
        if($user['id'] == $id) {
            return $user;
        }
    }
}
?>

<div class="container-fluid ms-2 mt-3">
<h1 class="text-center m-5" id="listeProfils">Vos matchs !</h1>
<?php
    foreach($matchingUsers as $key => $matchingUser){
        $user = getUserById($matchingUser, $userArray);   
?>
    <div class="card mb-3 " id="<?= $user['id'] ?>">
        <div class="row ">
            <div class="col-md-4">
                <figure class="figure">
                    <img src="assets/img/<?= $user['id'] ?>.jpg" class="figure-img img-thumbnail rounded" alt="logo" height="194px" width="259px">
                    <figcaption class="figure-caption text-center pseudo"><b>Pseudo : <?= $user['nickname']; ?></b></figcaption>
                </figure>
            </div>
            <div class="col-md-2 mt-5">
                <ul class="list-group">
                    <li class="mb-2">Ville : <?= $user['city'] ?></li>
                    <li class="mb-2">Type : <?= $user['species'] ?></li>
                    <li class="mb-2">Age : <?= $user['age'] ?></li>
                    <li class="mb-2">Sexe : <?= $user['sex'] ?></li>
                </ul>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card-body">
                    <h5 class="card-title text-uppercase font-weight-light"><?= $user['species'] ?></h5>
                    <p class="card-text"><?= $user['description'] ?></p>
                
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $user['id'] ?>">Voir profil !</button>
                    <button type="button" class="btn btn-secondary">Envoyer message</button>
                    <button type="button" class="btn btn-success">Liker</button>
                </div>

                <div class="modal fade" id="exampleModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase " id="exampleModalLabel">Pseudo : <?= $user['nickname']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mx-auto">
                        <ul class="text-center">
                       <img src="assets/img/<?= $user['id'] ?>.jpg">
                       </ul>
                       <ul class="mx-auto">
                        <li class="mb-2 text-center">Id : <?= $user['id'] ?></li>
                        <li class="mb-2 text-center">Ville : <?= $user['city'] ?></li>
                        <li class="mb-2 text-center">Type : <?= $user['species'] ?></li>
                        <li class="mb-2 text-center" >Age : <?= $user['age'] ?></li>
                        <li class="mb-2 text-center">Sexe : <?= $user['sex'] ?></li>
                        <li class="mb-2 text-center">yeux : <?= $user['eyeColor'] ?></li>
                        <li class="mb-2 text-center">chevaux : <?= $user['hairColor'] ?></li>
                        <li class="mb-2 text-center">Aime : <?= $user['loving'] ?></li>
                        <li class="mb-2 text-center">Déteste : <?= $user['hating'] ?></li>
                        <li class="mb-2 text-center">Food : <?= $user['food'] ?></li>
                        </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>                
            </div>       
        </div>        
    </div>
<?php
}
?>

</div>

<?php require 'footer.php' ?>



