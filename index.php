<?php require 'header.php' ?>

<section>
    <div class="container-fluid">

        <div id="carouselIntroduction" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIntroduction" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIntroduction" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIntroduction" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner carrouselIntro">
                <div class="carousel-item active">
                    <img src="assets/img/chat.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carrouselStyle">
                        <h5 class="textCarousel">Félin, vous avez besoin d'un amour canidé pour vous sentir bien ?</h5>
                        <p class="textCarousel">Venez trouver le chien de vos rêves qui a du chien !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/chien.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carrouselStyle">
                        <h5 class="textCarousel">Vous recherchez un amour félin de qualité ?</h5>
                        <p class="textCarousel">Venez découvrir nos fabriques à ronron tous plus mignons les uns que les autres, mais avec du caractère !</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/catDog.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carrouselStyle">
                        <h5 class="textCarousel">L'amour n'est pas qu'une question d'espèce !</h5>
                        <p class="textCarousel">Chez 3C nous mettons en relation des chiens et des chats qui se ressemblent pour un amour durable</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIntroduction" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIntroduction" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!--fin de la section carousel d'intro-->

<!--section les objectifs du site-->
<section>
    <div class="container text-center pt-5">
        <h1 style="color:#5FC3E4;">Comme Chien et Chat</h1>
           <h2>Le premier site de rencontre dédié aux relations interespèces</h2>

        <p class="pt-5">Nous avons créé Comme Chien et Chats en nous rendant compte que les sites de rencontre étaient systématiquement dédiés aux relations dites "classiques". <br>
            Entre chiens mâles et femelles, entre chats mâles ou entre chats femelles uniquement. Mais qu'en était-il pour les amours interespèces ? Ces dernières étaient les grandes oubliées. C'est de là que nous avons décidés de créer ce site.</p>
        <p> Au départ, personne ne voulait croire en notre projet. Et 5 ans après son lancement, le site est toujours présent ! <br>
            Comme des chiffres parlent mieux que de longs discours en voici quelques uns :
        <ul>
            <li>2 524 couples</li>
            <li>478 bébés adoptés par ces couples</li>
            <li>14 7866 inscrits</li>
            <li>458 engagements durables</li>
        </ul>
        </p>
    </div>
</section>
<!--fin de la section des objectifs du site-->


<!-- Derniers arrivés -->


<section class="port py-5" id="port">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">Les derniers arrivés</span></h2>
          </div>
        </div>
      </div>

      <div class="row text-center">
       
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chat1.jpg" class="card-img-top" alt="chat">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Caramail</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>

            </div>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Age : 1 ans </li>
                    <li class="list-group-item">Taille : 25 cm</li>
                    <li class="list-group-item">Type : félidé</li>
                    <li class="list-group-item">Sexe : mâle</li>
                </ul>
            </div>
            
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalSiteAgence">Voir profil !</button>
            
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chien2.jpg" class="card-img-top" alt="Chien">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Rexregis</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Age : 1 ans </li>
                    <li class="list-group-item">Taille : 70 cm</li>
                    <li class="list-group-item">Type : canidé</li>
                    <li class="list-group-item">Sexe : mâle</li>
                </ul>
            </div>
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#">Voir profil !</button>
                   
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chat1.jpeg" height="50%" weight="50%" class="card-img-top" alt="Chat">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Hortensia</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Age : 5 mois </li>
                    <li class="list-group-item">Type : félidé</li>
                    <li class="list-group-item">Sexe : female</li>
                </ul>
            </div>
           
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#">Voir profil !</button>          
        </div>
      </div>
      </div>
    </div>
  </section>
<!-- Derniers arrivés -->

<!-- testimonial -->

<section class="pt-5 pb-5 testimonial">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Ils ont matché !</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn border-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn border-dark mb-3 " href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

                    <!--doudou et plumy-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"><img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded" alt="photo chien et chat" src="assets/img/doudou&plumy.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">Avant de rencontrer Doudou, je ne ronronnais plus et je déprimais, mais ça, c'était avant !</h5>
                                            <p class="card-text">Doudou et Plumy - ensembles depuis 18 mois</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"><img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded" alt="100%x280" src="assets/img/Rex&Mangoust.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                J'ai trouvé le chat de mes rêves ici. J'avais longuement hésité et je ne le regrette pas. Quel bonheur de vivre avec un être qui vous comprends !</h5>
                                            <p class="card-text">Rex et Mangoust - 23mois, 2 semaines, 3 jours et 11heures de bonheur sans nuage </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"> <img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded" alt="100%x280" src="assets/img/FluffyBunny.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Nous ne savons pas quoi dire... Nous sommes FELIN pour l'autre ! </h5>
                                            <p class="card-text">
                                                Fluffy et Bunny</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"><img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded" alt="100%x280" src="assets/img/VanilleCaramel.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">Plus jamais seuls !

                                            </h5>
                                            <p class="card-text">Vanille et Caramel</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"> <img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded"" alt=" 100%x280" src="assets/img/pupuceRandom.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Et dire qu'on se pensait isolés et seuls. Ici nous avons trouvé des animaux partageant les mêmes goûts. Une révélation et un bel amour !</h5>
                                            <p class="card-text">Pupuce et Random</p>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 boxShadow">
                                    <div class="card h-100">
                                        <h4 class="text-center pt-2"><img class="img imgTestimonial img-thumbnail shadow p-3 mb-5 bg-black rounded" alt="100%x280" src="assets/img/MelloBambou.jpg">
                                        </h4>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Nos miaulements et aboiements ont trouvé l'accord parfait !</h5>
                                            <p class="card-text">Mello et Bambou</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'footer.php' ?>