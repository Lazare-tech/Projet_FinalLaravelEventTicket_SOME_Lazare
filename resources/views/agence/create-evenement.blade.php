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
  @include('agence.menu_vertical')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('agence.menu_horizontal')
    <!-- End Navbar -->
    <div class="container-fluid ">
        <div class="row">
          <div class="col-12">
            <div class="card my-0 ">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Creer Evenements</h6>
                </div>
              </div>

              <div class="card-body px-0 pt-1">
                <div class="step-container">
                  <form action="/ajouter/traitement" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="step-form ">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <div id="step1" class="step active">
                        <h2>Detail de l'evenement</h2>
                        <div class="row mb-3">
                          <div class="col-lg-6">
                            <label for="Nom" class="form-label text-muted">Nom de l'evenement</label>
                            <input type="text" class="form-control {{ $errors->has('nomEvenement') ? 'is-invalid' : '' }}" id="NomEevenment" name="nomEvenement">
                            @if($errors->has('nomEvenement'))
                            <span class="invalid-feedback">{{ $errors->first('nomEvenement') }}</span>
                            @endif
                          </div>
                          <div class="col-lg-6">
                            <label for="Type" class="form-label text-muted">Type de l'evenement</label>
      
                            <select class="form-select {{ $errors->has('type') ? 'is-invalid' : '' }} " aria-label="Default select example" name="type">
                              <option selected>type d'evenement</option>
      
                              @foreach ($categories as $categorie )
                              <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
      
                              @endforeach
      
                            </select>
                            @if($errors->has('type'))
                            <span class="invalid-feedback">{{ $errors->first('type') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <label for="Lieu" class="form-label text-muted">Lieu de l'evenement</label>
                            <input type="text" class="form-control {{ $errors->has('lieu') ? 'is-invalid' : '' }}" id="Lieu" name="lieu">
                            @if($errors->has('lieu'))
                            <span class="invalid-feedback">{{ $errors->first('lieu') }}</span>
                            @endif
                          </div>
                          <div class="col-lg-6">
                            <label for="Heure" class="form-label text-muted">Etat evenement</label>
                           <select class="form-control mb-2 {{ $errors->has('etat') ? 'is-invalid' : '' }}" name="etat">
                             <option value="">Please select...</option>
                             @foreach($etats as $etat)
                             <option value="{{ $etat->id }}">{{ $etat->nom }} </option>
                             @endforeach
                           </select>
                           @if($errors->has('etat'))
                           <span class="invalid-feedback">{{ $errors->first('etat') }}</span>
                           @endif
                         </div>
                        </div>
                        <div class="row pt-4">
                          <div class="col-lg-12">
                             <label for="Heure" class="form-label text-muted">Heure</label>
                            <select class="form-control mb-2 {{ $errors->has('timezone') ? 'is-invalid' : '' }}" name="timezone">
                              <option value="">Please select...</option>
                              @foreach($timezones as $timezone)
                              <option value="{{ $timezone->id }}">{{ $timezone->name }} ({{ $timezone->offset }})</option>
                              @endforeach
                            </select>
                            @if($errors->has('timezone'))
                            <span class="invalid-feedback">{{ $errors->first('timezone') }}</span>
                            @endif
                          </div>
                         
                        </div>
                        <div class="row pt-4">
                          <div class="col">
                            <label for="DateDebut" class="form-label text-muted">Date Debut</label>
                            <input type="datetime-local" class="form-control {{ $errors->has('dateDebut') ? 'is-invalid' : '' }}" id="Date_Debut" name="dateDebut">
                            @if($errors->has('dateDebut'))
                            <span class="invalid-feedback">{{ $errors->first('dateDebut') }}</span>
                            @endif
                          </div>
                          <div class="col">
                            <label for="DateFin" class="form-label text-muted">Date Fin</label>
                            <input type="datetime-local" class="form-control {{ $errors->has('dateFin') ? 'is-invalid' : '' }}" id="Date_Fin" name="dateFin">
                          </div>
                          @if($errors->has('dateFin'))
                          <span class="invalid-feedback">{{ $errors->first('dateFin') }}</span>
                          @endif
                        </div>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
      
                      </div>
      
                      <div id="step2" class="step">
                        <h2>Detail de l'evenement</h2>
                        <div class="row mb-3">
                          <div class="col-lg-12">
                            <label for="Image" class="form-label">Uploader une affiche</label>
                            <input type="file" class="form-control {{ $errors->has('image')? 'is-invalid': '' }}" id="Image" name="image">
                          </div>
                          @if($errors->has('image'))
                          <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                          @endif
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-12">
                            <textarea class="form-control {{ $errors->has('resume') ? 'is-invalid': '' }}" rows="3" placeholder="Resume de l'evenement "
                              name="resume"></textarea>
                          </div>
                          @if($errors->has('resume'))
                          <span class="invalid-feedback">{{ $errors->first('resume') }}</span>
                          @endif
                        </div>
                        <div class="row mb-3">
                          <div class="col-lg-12">
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid': '' }}" rows="5" placeholder="Description de l'evenement "
                              name="description"></textarea>
                          </div>
                          @if($errors->has('description'))
                          <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                          @endif
                        </div>
      
                      </div>
                      <button type="submit" class="btn btn-success" style="display: none;" id="SUBMIT">Soumettre</button>
      
                    </div>
      
                  </form>
      
              </div>
            </div>
          </div>
        </div>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/ass/js/material-dashboard.min.js') }}"></script>
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
</body>

</html>