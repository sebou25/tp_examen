<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href = "https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css"  rel = "stylesheet" >

    <title>restaurant italien</title>
</head>

<body>
   <div class="container site">
       <h1 class="text-logo"><i class = "icon ion-md-restaurant" > </i> Restaurant italien ADMIN <i class = "icon ion-md-restaurant"></i ></h1>

       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="pills-entree-tab" data-toggle="pill" href="#pills-entree" role="tab" aria-controls="pills-entree" aria-selected="false">Entrée</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="pills-pizza-tab" data-toggle="pill" href="#pills-pizza" role="tab" aria-controls="pills-pizza" aria-selected="false">Pizza</a>
  </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-pate-tab" data-toggle="pill" href="#pills-pate" role="tab" aria-controls="pills-pate" aria-selected="false">Pâte</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-dessert-tab" data-toggle="pill" href="#pills-dessert" role="tab" aria-controls="pills-dessert" aria-selected="false">Dessert</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-boisson-tab" data-toggle="pill" href="#pills-boisson" role="tab" aria-controls="pills-boisson" aria-selected="false">Boisson</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-panier-tab" data-toggle="pill" href="#pills-panier" role="tab" aria-controls="pills-panier" aria-selected="false">Panier</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-comteclient-tab" data-toggle="pill" href="#pills-compteclient" role="tab" aria-controls="pills-comteclient" aria-selected="false">Créer un compte</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" id="pills-connexionclient-tab" data-toggle="pill" href="#pills-connexionclient" role="tab" aria-controls="pills-connexionclient" aria-selected="false">Connexion Client</a>
           </li>
           <li class="nav-item">
           <a class="nav-link" href="http://localhost/tp_examen/admin/index.php">Connexion Admin</a>
           </li>
       </ul>

       <!--________________________________________________-->
       <div class="tab-content" id="pills-tabContent">


  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row">
          <div class="col-sm-4">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Restaurant italien</h5>
                      <p class="card-text">55 Avenue Hoche 75008 Paris</p>
                      <img src="./img/plan.png" width="200px" height="200px" alt="plan">
                      <p><ion-icon size = "large"  name="call"></ion-icon>+33 1 64 30 25 97</p>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="card">
                  <div class="card-body">
                      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img class="d-block w-100" src="img/r.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="img/r2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                  <img class="d-block w-100" src="img/r3.jpg" alt="Third slide">
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Horraire</h5>
                      <p class="card-text">
                      <ul>
                          <li>Lundi 11H00-15H00 / 18h30-23h00</li>
                          <li>Mardi 11H00-15H00 / 18h30-23h00</li>
                          <li>Mercredi 11H00-15H00 / 18h30-23h00</li>
                          <li>Jeudi 11H00-15H00 / 18h30-23h00</li>
                          <li>Vendredi 11H00-15H00 / 18h30-23h00</li>
                          <li>Samedi 11H00-15H00 / 18h30-23h00</li>
                          <li>Dimanche: Fermé</li>
                      </ul>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>

       <!--_________________________________________________________-->

  <div class="tab-pane fade" id="pills-entree" role="tabpanel" aria-labelledby="pills-entree-tab">
  <div class="row">

  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/e1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Entrée Antipasto</h5>
    <p class="card-text"> <div class="price">9,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

  <a href="#" class="btn btn-order " role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>

  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/e2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Entrée Charcutrie</h5>
    <p class="card-text"> <div class="price">7,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

    <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>


  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/e3.jpg " alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Entrée Carpacio</h5>
    <p class="card-text"> <div class="price">8,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

    <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>

</div>
</div>


<!--________________________________________________-->



  <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">

  <div class="row">
  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/p.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pizza Marguerita</h5>
    <p class="card-text"> <div class="price">8,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>
    <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>

  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/p2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pizza Anchois</h5>
    <p class="card-text"> <div class="price">9,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

    <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>


  <div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/p3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pizza Reine</h5>
    <p class="card-text"> <div class="price">11,90 €</div>
     Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

    <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
  </div>
</div>
</div>
  </div>
  </div>
      <!--________________________________________________-->



      <div class="tab-pane fade" id="pills-pate" role="tabpanel" aria-labelledby="pills-pate-tab">

          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/pa1.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Pâtes à la Bolognaise</h5>
                          <p class="card-text"> <div class="price">7,90 €</div>
                          Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                          <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small"name="cart"></ion-icon></span>Commander</a>
                      </div>
                  </div>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/pa2.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Pâtes aux Pesto</h5>
                          <p class="card-text"> <div class="price">9,90 €</div>
                          Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                          <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small"name="cart"></ion-icon></span>Commander</a>
                      </div>
                  </div>
              </div>


              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="./img/pa3.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title">Pâtes aux crevettes</h5>
                          <p class="card-text"> <div class="price">10,90 €</div>
                          Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                          <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
              <!--________________________________________________________________-->



    <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab">

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/d1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dessert Tiramisu</h5>
                        <p class="card-text"> <div class="price">8,90 €</div>
                        Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                        <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/d2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dessert Farandole</h5>
                        <p class="card-text"> <div class="price">8,90 €</div>
                        Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                        <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./img/d3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dessert Cannoli</h5>
                        <p class="card-text"> <div class="price">8,90 €</div>
                        Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                        <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--______________________________________________________________________________-->





        <div class="tab-pane fade" id="pills-boisson" role="tabpanel" aria-labelledby="pills-boisson-tab">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/b1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Morito</h5>
                            <p class="card-text"> <div class="price">5,90 €</div>
                            Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                            <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/b2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Vin</h5>
                            <p class="card-text"> <div class="price">12,90 €</div>
                            Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                            <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="./img/b3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Café</h5>
                            <p class="card-text"> <div class="price">2,90 €</div>
                            Un antipasto, des antipasti, les hors-d’œuvre italiens se conjuguent en entrées variées avec un art consommé… pour ouvrir l’appétit, et pronto ! </p>

                            <a href="#" class="btn btn-order" role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

       </div>
<!--__________________________________________________________________________________-->


  <footer>
<p>(C) 2018 Girard sébastien</p>
  </footer>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>

</body>

</html>
