<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <link rel="shortcut icon" type="image/png" href="./assets/img/favicon1.png" />
    <title>Comme Chien et Chat</title>
</head>

<body>
    <!-- header --->

    <header id="header-top">
        <!-- Main title and slogan -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md shadow navbar-dark" id="navbar-custom">
            <!-- Container wrapper -->
            <div class="container-fluid d-flex flex-wrap justify-content-between">
                <!-- Navbar brand -->
                <div class="brand order-2 order-md-1">
                    <a class="navbar-brand mt-lg-0 text-dark" href="index.php"><img class="my-0" src="assets/img/logo.png" alt="logo" height="60px" weight="60px"></a>
                </div>

                <!-- Toggle button -->
                <div class="menu-burger order-1">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- Collapsible wrapper -->
                <div id="navbarNav" class="collapse navbar-collapse order-2 order-md-1">
                    <!-- Nav links -->
                    <ul class="navbar-nav fs-4">

                        <?php if (!empty($_SESSION['nickname'])) : ?>
                            <li class="nav-item my-1">
                                <a class="btn btn mx-3" href="profilList.php">Liste des profils</a>
                            </li>
                            <li class="nav-item my-1">
                                <a class="btn btn mx-3" href="match.php">Vos matchs</a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item my-1">
                            <?php if (empty($_SESSION['nickname'])) : ?>
                                <a class="btn btn mx-3" href="subscription.php">S'inscrire</a>
                            <?php else : ?>
                                <a class="btn btn mx-3" href="myprofile.php">modifier mon profil</a>
                            <?php endif ?>
                        </li>
                    </ul>
                    <!-- End of nav links -->
                </div>
                <!-- End of collapsible wrapper -->

                <!-- Login -->
                <div class="cart d-flex me-lg-3 order-1">
                    <!-- Login and Logout icons -->
                    <?php if (isset($_SESSION['nickname'])) : ?>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                    <?php else : ?>
                        <a href="login.php"><img src="./assets/img/user.png" alt="login" height="50" width="50"></a>
                    <?php endif ?>
                </div>
                <!-- End of Login -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header class="mb-5">