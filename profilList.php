<?php require 'header.php' ?>

<?php


$json = file_get_contents('db.json');
$userArray = json_decode($json, true);



$user = getUserById(0, $userArray);

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
<h1 class="text-center m-5">Liste des profils</h1>
<?php
    for($i = 0; $i< count($userArray); $i++){
        $user = getUserById($i, $userArray);
   
?>
    <div class="card mb-3 " id="<?= $user['id'] ?>">
        <div class="row ">
            <div class="col-md-4">
                <figure class="figure">
                    <img src="assets/img/<?= $user['id'] ?>.jpg" class="figure-img img-thumbnail rounded" alt="logo" height="194px" width="259px">
                    <figcaption class="figure-caption text-center"><b>Pseudo : <?= $user['nickname']; ?></b></figcaption>
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
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                
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
                            <h5 class="modal-title text-uppercase" id="exampleModalLabel">Pseudo : <?= $user['nickname']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body align-center">
                       <img src="assets/img/<?= $user['id'] ?>.jpg">
                        <li class="mb-2">Id : <?= $user['id'] ?></li>
                        <li class="mb-2">Ville : <?= $user['city'] ?></li>
                        <li class="mb-2">Type : <?= $user['species'] ?></li>
                        <li class="mb-2">Age : <?= $user['age'] ?></li>
                        <li class="mb-2">Sexe : <?= $user['sex'] ?></li>
                           
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