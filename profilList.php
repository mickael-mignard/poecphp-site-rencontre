<?php require 'header.php' ?>

<?php
$json = file_get_contents('db.json');
$userArray = json_decode($json, true);


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
<h1 class="text-center m-5" id="listeProfils" >Liste des profils</h1>
<?php
    for($i = 0; $i< count($userArray); $i++){
        $user = getUserById($i, $userArray);
   
?>
    <div class="card mb-3 " id="<?= $user['id'] ?>">
        <div class="row ">
            <div class="col-md-4">
                <figure class="figure">
                    <img src="assets/img/<?= $user['id'] ?>.jpg" class="figure-img img-thumbnail rounded" alt="logo" height="194px" width="259px">
                    <figcaption class="figure-caption text-center fw-bold pseudo"><span class="text-uppercase"><?= $user['nickname']; ?></span></figcaption>
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
                    <h5 class="card-title text-capitalize font-weight-light"><?= $user['species'] ?></h5>
                    <p class="card-text"><?= $user['description'] ?></p>
                
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                    <button type="button" class="btn btnProfil text-white" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $user['id'] ?>">Voir profil !</button>
                    <button type="button" class="btn btn-secondary">Envoyer message</button>
                    <button type="button" class="btn text-white" id="btnLiker">Liker</button>
                </div>

                <div class="modal fade" id="exampleModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Pseudo : <span class="text-uppercase"><?= $user['nickname']; ?></span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body mx-auto">
                        <ul class="text-center">
                       <img src="assets/img/<?= $user['id'] ?>.jpg">
                       </ul>
                       <ul class="mx-auto">
                        <li class="mb-2 text-center"><span class="fw-bold">Ville :</span> <?= $user['city'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">Type :</span> <?= $user['species'] ?></li>
                        <li class="mb-2 text-center" ><span class="fw-bold">Age :</span> <?= $user['age'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">Sexe :</span> <?= $user['sex'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">yeux :</span> <?= $user['eyeColor'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">chevaux :</span> <?= $user['hairColor'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">Aime :</span> <?= $user['loving'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">Déteste :</span> <?= $user['hating'] ?></li>
                        <li class="mb-2 text-center"><span class="fw-bold">Food :</span> <?= $user['food'] ?></li>
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