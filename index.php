

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
    <link rel="stylesheet" type="text/css" href="assets/css/header.css" media="all" />    
    <title>Comme Chien et Chat - Index</title>
</head>
<body>

 <?= require ""


<!------------------------------- Les cards -------------------------------------->



<section class="portfolio py-5" id="portfolio">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2 class="fw-bold mb-5">QUELQUES PROFILS</span></h2>
          </div>
        </div>
      </div>




      <div class="row text-center">
       
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chat1.jpg" class="card-img-top" alt="chat">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Chat</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>

            </div>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Age : </li>
                    <li class="list-group-item">Taille :</li>
                    <li class="list-group-item">Type :</li>
                    <li class="list-group-item">Sexe :</li>
                </ul>
            </div>
            
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalSiteAgence">Voir profil !</button>

            <!--modal profil -->

            <div class="modal fade" id="exampleModalSiteAgence" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/amri.store.png" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">Site Agence Web</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        react-bootstrap
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        styled-components
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React Router
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        fortawesome
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        material-ui
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres
                      </button>
                    </p>
                  </div>
                  <div class="modal-footer">
                  
                 
                      <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                        QUITTER !
                      </a>
                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chien2.jpg" class="card-img-top" alt="Chien">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Chien</h3>
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
                    <li class="list-group-item">Taille : </li>
                    <li class="list-group-item">Type :</li>
                    <li class="list-group-item">Sexe : Male</li>
                </ul>
            </div>
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir profil !</button>
          
            <!--modal-->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/chien.jpg" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">Site Web personnel responsive</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        
                        mdbreact
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        ui-neumorphism
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React Router
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        React
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        fortawesome
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        material-ui
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres ..
                      </button>
                      
                    </p>
                  </div>
                  <div class="modal-footer">
                  
                      
                 
                      <a href="https://github.com/amri-coder/amri-dev" class="btn btn-secondary text-decoration-none text-white" role="button">
                        CODE SOURCE
                      </a>

                      <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                        QUITTER !
                      </a>
                    
                  </div>
                </div>
              </div>
            </div>          
          
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="services-item shadow-sm p-4 rounded bg-white">
            <div class="icon my-3 text-info fs-2">
              <img src="./assets/img/chat1.jpeg" height="50%" weight="50%" class="card-img-top" alt="Chat">
            </div>
            <h3 class="fs-5 py-2 text-uppercase text-info text-muted">Chat</h3>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Age : </li>
                    <li class="list-group-item">Taille :</li>
                    <li class="list-group-item">Type :</li>
                    <li class="list-group-item">Sexe :</li>
                </ul>
            </div>
           
            <button class="get-btn" data-bs-toggle="modal" data-bs-target="#exampleModalEcommerce">Voir profil !</button>

            <!--modal-->

            <div class="modal fade" id="exampleModalEcommerce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">chat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="img/e-commerce.png" class="card-img-top border border-muted" alt="amri-dev.site">
                    <h2 class="text-primary text-uppercase ">chat</h2>
                    <h2 class="fs-4">Amri.</h2>
                    <h4 style="color: #93A4AA;">- Stack Technique -</h4>
                    <p class="mt-4 text-muted">
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        HTML 5 / CSS 3
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Bootstrap
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        JavaScript
                      </button>
                      <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">
                        Autres ..
                      </button>
                    </p>
                  </div>
                  <div class="modal-footer">
                 
                      <a href="https://github.com/amri-coder/e-commerce" class="btn btn-secondary text-decoration-none text-white" role="button">
                        CODE SOURCE
                      </a>

                      <a href="#" class="btn btn-primary text-decoration-none text-white" role="button" data-bs-dismiss="modal">
                        QUITTER !
                      </a>
                    
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>


      </div>
    </div>
  </section>
<!---------------------------- Fin les cards -------------------------------------> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a72359a2f.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>