<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/ass/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset ('assets/ass/img/favicon.png') }}">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('assets/ass/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{asset ('assets/ass/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('assets/ass/css/material-dashboard.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
.step-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 1rem;
    }

    .step-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 569px;
      /* Ajout pour définir la largeur du formulaire */

    }

    .progress {
      margin-bottom: 20px;
    }

    .progress-bar {
      transition: width 0.5s ease-in-out;
    }

    .step {
      display: none;
    }

    .step.active {
      display: block;
    }
</style>
</head>

<body class="g-sidenav-show  bg-gray-200">
 <!-- ... (votre code existant) ... -->

<body class="g-sidenav-show bg-gray-200">
    @include('agence.menu_vertical')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      @include('agence.menu_horizontal')
      <!-- End Navbar -->
  
      <div class="container-fluid mt-4">
        <!-- Section 1: Bienvenue -->
        @if(auth()->user()->agence && auth()->user()->agence->evenements->count() > 0)  

        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-5">Bienvenue sur EasyTicket Dashboard</h1>
            <p class="lead">Gérez vos événements et billets en toute simplicité.</p>
          </div>
        </div>
  
        <!-- Section 2: Fonctionnalités clés -->
        <div class="row mt-4">
          <div class="col-lg-4 mb-4">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <i class="fas fa-calendar-plus fa-2x mb-3"></i>
                <h5 class="card-title">Créer un Événement</h5>
                <p class="card-text">Ajoutez et gérez vos événements en quelques clics.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card bg-success text-white">
              <div class="card-body">
                <i class="fas fa-ticket-alt fa-2x mb-3"></i>
                <h5 class="card-title">Ventes de Billets</h5>
                <p class="card-text">Suivez les ventes de billets et les statistiques en temps réel.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card bg-info text-white">
              <div class="card-body">
                <i class="fas fa-headset fa-2x mb-3"></i>
                <h5 class="card-title">Support Client</h5>
                <p class="card-text">Obtenez de l'aide rapidement grâce à notre service client dédié.</p>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Section 3: Statistiques ou Graphiques -->
        <div class="row mt-4">
          <div class="col-lg-12">
            <!-- Ajoutez ici des graphiques ou des statistiques pour mettre en avant les données clés -->
          </div>
        </div>
        @else
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-5">Bienvenue sur EasyTicket Dashboard</h1>
            <p class="lead">Trouvez et participez aux événements passionnants près de chez vous.</p>
          </div>
        </div>
        @endif
      </div>
    </main>
  
    <!-- ... (votre code existant) ... -->
  </body>
  
</body>

</html>