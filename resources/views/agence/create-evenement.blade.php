<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Dashboard Template · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">





  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }


    /* .............................................................................. */
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


  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
      aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
          aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
          aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Company name</a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch"
          aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi">
            <use xlink:href="#search" />
          </svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
          aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
              aria-label="Close"></button>
          </div>
          {{-- include menu --}}
          @include('agence.menu_vertical')
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Creer un evenement</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                <svg class="bi">
                  <use xlink:href="#calendar3" />
                </svg>
                This week
              </button>
            </div>
          </div>
          <div class="step-container">
            <form action="/ajouter/traitement" method="POST">
              @csrf
              <div class="step-form pt-1">
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <div id="step1" class="step active">
                  <h4>Étape 1</h4>
                  <div class="row mb-3">
                    <div class="col-lg-6">
                      <label for="Nom" class="form-label text-muted">Nom de l'evenement</label>
                      <input type="text" class="form-control" id="NomEevenment" name="nomEvenement">
                    </div>
                    <div class="col-lg-6">
                      <label for="Type" class="form-label text-muted">Type de l'evenement</label>

                      <select class="form-select" aria-label="Default select example" name="type">
                        <option selected>type d'evenement</option>

                        @foreach ($categories as $categorie )
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>

                        @endforeach

                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="Lieu" class="form-label text-muted">Lieu de l'evenement</label>
                      <input type="text" class="form-control" id="Lieu" name="lieu">
                    </div>
                  </div>
                  <div class="row pt-4">
                    <div class="col-lg-6">
                       <label for="Heure" class="form-label text-muted">Heure</label>
                      <select class="form-control mb-2" name="timezone">
                        <option value="">Please select...</option>
                        @foreach($timezones as $timezone)
                        <option value="{{ $timezone->id }}">{{ $timezone->name }} ({{ $timezone->offset }})</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <label for="Heure" class="form-label text-muted">Heure</label>
                     <select class="form-control mb-2" name="agence">
                       <option value="">Please select...</option>
                       @foreach($users as $user)
                       <option value="{{ $user->id }}">{{ $user->name }} </option>
                       @endforeach
                     </select>
                   </div>
                    
                  </div>
                  <div class="row pt-4">
                    <div class="col">
                      <label for="DateDebut" class="form-label text-muted">Date Debut</label>
                      <input type="datetime-local" class="form-control" id="Date_Debut" name="dateDebut">
                    </div>
                    <div class="col">
                      <label for="DateFin" class="form-label text-muted">Date Fin</label>
                      <input type="datetime-local" class="form-control" id="Date_Fin" name="dateFin">
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>

                </div>

                <div id="step2" class="step">
                  <h2>Detail de l'evenement</h2>
                  <div class="row mb-3">
                    <div class="col-lg-12">
                      <label for="Image" class="form-label">Uploader une affiche</label>
                      <input type="file" class="form-control" id="Image" name="photo">
                    </div>

                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-12">
                      <textarea class="form-control" rows="3" placeholder="Resume de l'evenement "
                        name="resume"></textarea>
                    </div>

                  </div>
                  <div class="row mb-3">
                    <div class="col-lg-12">
                      <textarea class="form-control" rows="5" placeholder="Description de l'evenement "
                        name="description"></textarea>
                    </div>

                  </div>

                </div>
                <button type="submit" class="btn btn-success" style="display: none;" id="SUBMIT">Soumettre</button>

              </div>

            </form>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-e3+8Xj1aNqDVM+TObQAAKk4DO8shQhxWNVZn5b2iRXLpHQRsjz5gC5CIS+HdXHaa"
              crossorigin="anonymous"></script>

            <script>
              let currentStep = 1;
              let n=0;

              function nextStep() {
                const current = document.getElementById('step' + currentStep);
                const next = document.getElementById('step' + (currentStep + 1));
                n+=1;

                if (next) {
                  current.classList.remove('active');
                  next.classList.add('active');
                  updateProgressBar(++currentStep);
                }
                if(n==1){
                  let submit=document.getElementById('SUBMIT');
                  submit.style.display='block';
                }
                
              }

              function prevStep() {
                const current = document.getElementById('step' + currentStep);
                const prev = document.getElementById('step' + (currentStep - 1));

                if (prev) {
                  current.classList.remove('active');
                  prev.classList.add('active');
                  updateProgressBar(--currentStep);
                }
              }

              function updateProgressBar(step) {
                const progressBar = document.querySelector('.progress-bar');
                const progressValue = (step - 1) * 50; // 33% for each step
                progressBar.style.width = progressValue + '%';
                progressBar.setAttribute('aria-valuenow', progressValue);
              }
            </script>

        </main>
      </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
      integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG"
      crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>