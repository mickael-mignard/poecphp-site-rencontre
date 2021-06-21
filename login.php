<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />    
    <title>Comme Chien et Chat - Index</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">


</head>
<body>



< ?php require header.php ?>




<div class="container">
        <div class="row mt-5">
            <div class="col-4 offset-1" id="leftSide">
                <img class="img-fluid" src="assets/img/catDogLogin.jpg" />
            </div>
            <div class="col-6 card">
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">Connectez-vous au site 3C </h1>
                    <form action="index.php" method="POST">

                        </select>
                        <div class="mb-3">
                            <label for="nickname" class="form-label">Pseudo : </label>
                            <input type="nickname" class="form-control" id="nickname" name="nickname"  aria-describedby="nicknameHelp" >
                            <div class="mb-3">
                        <label for="inputPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password" id="inputPassword1">
                        </div>
                                            

                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="login">Se connecter</button>
                            <button class="btn btn-secondary" type="submit" name="subscribe">Créer son profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



< ?php require footer.php ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a72359a2f.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>