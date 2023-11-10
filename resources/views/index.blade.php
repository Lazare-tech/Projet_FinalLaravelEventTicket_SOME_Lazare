<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <meta name="generator" content="Hugo 0.112.5">
  <title>EasyTicket</title>
  <link rel="stylesheet" href="style_index.css">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="jumbotrons.css">
  <link rel="stylesheet" href="featuresIconGrid.css">

<!-- Bootstrap core CSS -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Additional CSS Files -->
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
 <style>

  </style>
</head>

<body>
 @include('navbar.navbar')
 
 <!-- ***** Main Banner Area Start ***** -->
 <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/production_id_4440815 (1080p).mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Decouvrez l'Experience Ultime</h6>
            <h2><em>L'endroit ideal</em>pour l'evenementiel</h2>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <a href="#trouver-evenement"><button type="button" class=" btn-lg px-4 text-white fw-bold gap-3 trouvez_des_evenement">Trouvez des evenements</button></a>
              <button type="button" class="px-4 text-dark creez_un_evenement">Créez un evenement</button>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>Simplifier</h4>
            </div>
            <div class="content-hide fw-bold">
              <p>
                Nous simplifions le processus d'acces aux billets.
            Selectionnez votre evenemente et Achetez vos billets en quelques clics seulement!!
              </p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Collaborer</h4>
            </div>
            <div class="content-hide fw-bold">
              En collaborant avec nous,vous aurez l'opportunite de promouvoir vos propres
              evenements et de beneficiez d'une visibilite accrue aupres de notre communaute passionnee.
              Possibilite egalement de collaborer avec les intervenants de votre evemnement.
         
              <p>
              
              </p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post third-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-book"></i>Creer</h4>
            </div>
            <div class="content-hide fw-bold">
              <p>
                Vous avez une idee d'evenement unique?
                Creez votre propre soiree thematique et partagez avec le monde entier.Nous Vous
                guiderons a chaque etape pour faire de votre evenement un succes.    
              </p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section why-us" data-section="section2" id="trouver-evenement">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Trouvez des evenements pres de chez vous!</h2>
        </div>
      </div>
      <div class="col-md-12">

        <div class="input-group" >
          <button type="button" class=" bouton-cherche btn-sm"><span class="rechercher text-white">Rechecher</span><i class="fas fa-search fa-1x" style="color:white"></i></button>

            <select class="form-select" aria-label="Default select example">
            <option selected>Categorie...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Default select example">
            <option selected>localisation...</option>
            <option value="1">Bobo-Dioulasso</option>
            <option value="2">Banfora</option>
            <option value="3">Ouagadougou</option>
          </select>
          <select class="form-select" aria-label="Default select example">
            <option selected>Date...</option>
            <option value="1">10 04 23</option>
            <option value="2">5 06 2024</option>
            <option value="3">10 10</option>
          </select>

        </div>
      </div>
    </div>
  </div>
</section>


<!-- end section -->
<div class="b-example-divider bg-secondary"></div>
<section class="carte-container">
<section class="container mt-0">
  <div class="row">
    <h5 class="text-white">Evenements a porte de mains</h5>
    <h3 class=""><span class="text-white">Decouvrez</span><span class="text-warning">nos categories</span></h3>
  </div>
</section>
<div class="container mt-5 catalogue_categorie ">
  <div class="row">
      <!-- Colonne 1 -->
      <div class="col-md-6" style="background:#162238 ;">
          <div class="card mb-4">
              <!-- <div class="card-body">
                  Contenu de la carte 1
              </div> -->
           
              <video autoplay muted loop>
                <source src="assets/images/production_id_4440815 (1080p).mp4" type="video/mp4" />
            </video>
          </div>
      </div>
      <div class="col-lg-3 d-flex flex-column">
        <div class="card categorie-evenement text-center " style="background: #162238;;">
          <img src="images/festival.svg" class="card_categorie-evenement" alt="Festival"  style="margin: auto;">
          <div class="card-body">
            <h5 class="card-title text-warning titre_evenement">Festival</h5>
          </div>
        </div>
        <div class="card categorie-evenement text-center mt-2" style="background: #162238;">
          <img src="images/salonGrangPublic.svg" class="card_categorie-evenement" alt="salon grand public" style="margin: auto;">
          <div class="card-body">
            <h5 class="card-title text-warning titre_evenement">Salon Grang public</h5>
          </div>
        </div>
      </div>
      <!-- Colonne 2 -->
      <div class="col-md-3 d-flex flex-column">
        
          <div class="card categorie-evenement text-center" style="background: #162238;"> <!-- Added 'text-center' class -->
            <img src="images/musqiue.svg" class="card_categorie-evenement" alt="..." style="margin: auto;"> <!-- Added 'style="margin: auto;"' to center the image -->
            <div class="card-body ">
              <h5 class="card-title text-warning titre_evenement">Musique</h5>
            </div>
          </div>
         
            <div class="card categorie-evenement text-center mt-2" style="background: #162238;">
              <img src="images/workshop.svg" class="card_categorie-evenement" alt="cinema" style="margin: auto;">
              <div class="card-body">
                <h5 class="card-title text-warning  titre_evenement">Atelier</h5>
              </div>
            </div>
             
          <!-- Colonne 4 -->
         
      </div>
    
  </div>
  <div class="row">
      <div class="col-lg-3">
        <div class="card categorie-evenement text-center" style="background: #162238;">
          <img src="images/concert.svg" class="card_categorie-evenement" alt="Concert"  style="margin: auto;">
          <div class="card-body">
            <h5 class="card-title text-warning  titre_evenement">Concert</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card categorie-evenement text-center" style="background: #162238;">
          <img src="images/loisirs.svg" class="card_categorie-evenement" alt="Loisirs"  style="margin: auto;">
          <div class="card-body">
            <h5 class="card-title text-warning  titre_evenement">Loisirs</h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 ">
        <div class="card categorie-evenement text-center" style="background: #162238;">
          <img src="images/fete.svg" class="card_categorie-evenement text-center" alt="fete"  style="margin: auto;">
          <div class="card-body">
            <h5 class="card-title text-warning  titre_evenement">Fete</h5>
          </div>
        </div>
      </div>
     
      <div class="col-lg-3">
        <div class="card categorie-evenement text-center" style="background: #162238;">
          <!-- <img src="images/film-solid.svg" class="" alt="cinema"> -->
          <i class="fas fa-film fa-5x card_categorie-evenement" style="color: #e8b66b;margin:auto"></i>
            <div class="card-body">
            <h5 class="card-title text-warning  titre_evenement">Cinemea</h5>
          </div>
        </div>
      </div>
     
  </div>
</div>
</section>
<!-- <section class="container mt-5">
  <div class="row text-center mb-4">
    <h5 class="fw-bold text-uppercase">Événements à portée de main</h5>
    <h3 class="fw-bold"><span class="text-dark">Découvrez</span> nos catégories</h3>
  </div>
  <div class="row g-4 justify-content-center">

    <div class="col-lg-3">
      <div class="card categorie-evenement text-center p-4 shadow">
        <img src="images/musique.svg" class="card_categorie-evenement" alt="Musique" style="margin: auto;">
        <div class="card-body">
          <h5 class="card-title text-warning fw-bold mb-0">Musique</h5>
          <p class="card-text">Explorez le monde musical</p>
        </div>
      </div>
    </div>


  </div>
</section> -->


<!-- <section class="container py-5">
  <div class="para">
    <p class="n">
    <h5 style="color:#d68742">lorem ipsum<br></h5>
    <h1>Pariatur mollit quis proident ullamco exercitation..</h1>
    </p>
  </div>
</section>

<section class="container">
  <div class="row">
    <div class="col-lg-6">
      <h5><b>Aute eu nostrud velit aliquip aliqua laboris esse id proident in sit sit.</b></h5><br>
      <p>Never again waste time thinking about what to eat! Omnifood AI<br>
        will create a 100% personalized weekly meal plan just for you. It<br>
        makes sure you get all the nutrients and vitamins you need, no<br>
        matter what diet you follow!</p>
    </div>
    <div class="col-lg-6">
      <img src="" alt="images ici">
    </div>
  </div>
  <div class="row py-5">
    <div class="col-lg-6">
      <img src="" alt="images ici">
    </div>
    <div class="col-lg-6">
      <h5><b>Aliquip tempor est commodo adipisicing voluptate quis deserunt.</b></h5><br>
      <p>Never again waste time thinking about what to eat! Omnifood AI<br>
        will create a 100% personalized weekly meal plan just for you. It<br>
        makes sure you get all the nutrients and vitamins you need, no<br>
        matter what diet you follow!</p>
    </div>

  </div>
  <div class="row py-5">

    <div class="col-lg-6">
      <h5><b>Sunt pariatur mollit nostrud aliquip in exercitation sunt magna elit.</b></h5><br>
      <p>Never again waste time thinking about what to eat! Omnifood AI<br>
        will create a 100% personalized weekly meal plan just for you. It<br>
        makes sure you get all the nutrients and vitamins you need, no<br>
        matter what diet you follow!</p>
    </div>
    <div class="col-lg-6">
      <img src="" alt="images ici">
    </div>

  </div>
  <div class="row py-5">
    <div class="col-lg-6">
      <img src="" alt="images ici">
    </div>
    <div class="col-lg-6">
      <h5><b>Sunt laboris exercitation ea culpa qui ad aliqua minim.</b></h5><br>
      <p>Never again waste time thinking about what to eat! Omnifood AI<br>
        will create a 100% personalized weekly meal plan just for you. It<br>
        makes sure you get all the nutrients and vitamins you need, no<br>
        matter what diet you follow!</p>
    </div>


  </div>
</section> -->


<!-- section evenement a venir -->
<!-- <hr class="container mt-5"> -->
<section class="container-fluid condition mt-5">
  <section class="container ">

    <div class="row pt-3">
      <h5 class="card-title text-center text-warning ">Evenememts</h5>
      <p class="text-center fs-5">Particiez aux evenements qui vous inspirent a travers le monde</p>
      <a href="#"><button class="voir_tous_evenement">Voir tous les evenements</button></a>
    </div>
    <!-- <button class="btn btn-warning">Voir</button> -->


    <div class="row row-cols-1 row-cols-md-3 g-4 pb-4 pt-3 ">
      <div class="col-lg-4 ">
        <div class="card card-evenement">
          <img src="images/event10.jpeg" class="card-img-top card-evenement-photo" alt="Evenement" />

          <div class="card-body">
            <button class="voir_plus float-end plus"><i class="fas fa-plus"></i></button>
          
            <div class="it mt-4 mb-3">
              <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
              <span class="evenement-titre ">Samedi 3 Mars 23 a 19h00 (GMT) </span><br>
              <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
              <span class="evenement-titre ">Espace Morene</span>

            </div>

            <!-- <div class="text-right">
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                    </div> -->
            <div class="mt-4">
              <i class="fas fa-money-check fa-2x" style="color: #1f5120;"></i>
              <span class="float-end">3000FCFA</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card card-evenement">
          <img src="images/event2.jpeg" class="card-img-top card-evenement-photo" alt="Evenement" />

          <div class="card-body">
            <button class="voir_plus float-end plus"><i class="fas fa-plus"></i></button>
          
            <div class="it mt-4">
              <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
              <span class="evenement-titre ">Samedi 3 Mars 23 a 19h00 (GMT) </span><br>
              <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
              <span class="evenement-titre ">Espace Morene</span>

            </div>

            <!-- <div class="text-right">
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                    </div> -->
            <div class="mt-4">
              <i class="fas fa-money-check fa-2x" style="color: #1f5120;"></i>
              <span class="float-end">3000FCFA</span>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4">
        <div class="card card-evenement">
          <img src="images/event4.jpeg" class="card-img-top card-evenement-photo" alt="Evenement" />

          <div class="card-body">
            <button class="voir_plus float-end plus"><i class="fas fa-plus"></i></button>

            <div class="it mt-4">
              <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
              <span class="evenement-titre ">Samedi 3 Mars 23 a 19h00 (GMT) </span><br>
              <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
              <span class="evenement-titre ">Espace Morene</span>

            </div>

            <!-- <div class="text-right">
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                    </div> -->
            <div class="mt-4">
              <i class="fas fa-money-check fa-2x" style="color: #1f5120;"></i>
              <span class="float-end">3000FCFA</span>
            </div>
          </div>
        </div>
        
      </div>
    </div>
   
    <div class="cover mt-1">
      <button class="left" onclick="leftScroll()">
        <i class="fas fa-angle-double-left"></i>
      </button>
      <div class="scroll-images ">
        <div class="px-2">

          <img src="images/event9.jpeg" alt="" class="card-evenement-miniature">
          <h4 class="text-center text-white">Titre</h4>

        </div>
        <div class="px-2">

          <img src="images/event8.jpeg" alt="" class="card-evenement-miniature">
          <h4 class="text-center text-white">Titre</h4>

        </div>
       
        <div class="px-2">

          <img src="images/event10.jpeg" alt="" class="card-evenement-miniature">
          <h4 class="text-center text-white">Titre</h4>

        </div>
        

      </div>
      
      <button class="right" onclick="rightScroll()">
        <i class="fas fa-angle-double-right"></i>
      </button>
    </div>

  </section>
</section>
<!-- fin section -->
<div class="container px-4 py-5" id="icon-grid">
  <h2 class="pb-2 border-bottom">Les possibilites que nous vous offrons</h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5 justify-content-center">
    <div class="col d-flex align-items-start">
      <!-- <i class="fas fa-users-slash fa-2x"></i> -->
      <div>
        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis ">Collaborer</h3>
        <p>Un écosystème qui réunis toutes les parties prenantes de l'événementiel, showbiz, ...
        </p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <!-- <i class="fas fa-ticket-alt"></i> -->
      <div>
        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Billet</h3>
        <p>Organiser, gérer vos inscriptions et la distribution de vos billets d’accès.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <!-- <i class="fas fa-list"></i> -->
      <div>
        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Listing</h3>
        <p>Consulter le listing des lieux d'événementiel et de divertissement</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <!-- <i class="fas fa-ticket-alt"></i> -->
      <div>
        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Billet</h3>
        <p>Organiser, gérer vos inscriptions et la distribution de vos billets d’accès.</p>
      </div>
    </div>
   
  </div>
</div>

<!-- Carousel wrapper -->
<section class="avis">
  <div class="row">
    <h4 class="text-white text-center mt-4">Avis de nos utilisateurs</h4>
  </div>
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
<!-- Controls -->

<div class="d-flex justify-content-center mb-5 mt-3">
  <button class="carousel-control-prev position-relative" type="button"
    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next position-relative" type="button"
    data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Inner -->
<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/la.jpeg" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">Anna Deynah</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
            officiis hic tenetur quae quaerat ad velit ab hic tenetur.
          </p>

        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/i7.jpeg" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">John Doe</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
            suscipit laboriosam, nisi ut aliquid commodi.
          </p>
         
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/Sans titre.jpeg" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">Maria Kate</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium voluptatum deleniti atque corrupti.
          </p>
         
        </div>
      </div>
    </div>
  </div>
  <!-- Single item -->
  <div class="carousel-item">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/mia.png" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">John Doe</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
            officiis hic tenetur quae quaerat ad velit ab hic tenetur.
          </p>
         
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/dramane.jpeg" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">Alex Rey</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
            suscipit laboriosam, nisi ut aliquid commodi.
          </p>
                    </div>

        <div class="col-lg-4 d-none d-lg-block">
          <img class="rounded-circle shadow-1-strong mb-4"
            src="images/dia.jpeg" alt="avatar"
            style="width: 90px;" />
          <h5 class="mb-3">Maria Kate</h5>
          <p class="commentaire">
            <i class="fas fa-quote-left pe-2"></i>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium voluptatum deleniti atque corrupti.
          </p>
         
        </div>
      </div>
    </div>
  </div>

 
</div>
<!-- Inner -->
</div>
</section>

<!-- Carousel wrapper -->
<!-- form contact -->
<section class="section contact" data-section="section6">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Nous contacter</h2>
        </div>
      </div>
      <div class="col-md-8">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-8">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-8">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="button">Envoyer</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</section>
@include('footer.footer')
<script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="index.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body>
</html>