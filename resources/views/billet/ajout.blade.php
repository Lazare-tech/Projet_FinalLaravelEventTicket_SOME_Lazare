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
    Ajout  Liste billet
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
</style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('agence.menu_vertical')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('agence.menu_horizontal')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Billets</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                  
                <div class="step-container">
                    <form action="ajout_billet/traitement" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="step-form pt-1">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div id="step1" class="step active">
                                <h4>Étape 1</h4>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <label for="Image" class="form-label text-muted">Billet</label>
                                        <input type="file"
                                            class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                            id="Image" name="image">
                                    </div>
                                    @if($errors->has('image'))

                                    <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">

                                        <label for="Evenement" class="form-label text-muted">Evenement</label>
                                        <select
                                            class="form-control mb-2 {{ $errors->has('evenement') ? 'is-invalid' : '' }}"
                                            name="evenement">
                                            <option value="">Please select evenement</option>
                                            @foreach($evenements as $evenement)
                                            <option value="{{ $evenement->id }}">{{ $evenement->nom }} </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('evenement'))

                                        <span class="invalid-feedback">{{ $errors->first('evenement') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="Prix" class="form-label text-muted">Prix</label>
                                        <input type="number"
                                            class="form-control {{ $errors->has('prix') ? 'is-invalid' : '' }}"
                                            id="Prix" name="prix">
                                    </div>
                                    @if($errors->has('prix'))

                                    <span class="invalid-feedback">{{ $errors->first('prix') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <label for="TypeBillet" class="form-label text-muted">Type billet</label>
                                        <select
                                            class="form-control mb-2 {{ $errors->has('typebillet') ? 'is-invalid' : '' }}"
                                            name="typebillet">
                                            <option value="">Please select type</option>
                                            @foreach($typebillets as $typebillet)
                                            <option value="{{ $typebillet->id }}">{{ $typebillet->typebillet }} </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('typebillet'))

                                        <span class="invalid-feedback">{{ $errors->first('typebillet') }}</span>
                                        @endif
                                    </div>

                                </div>
                                

                            </div>

                            <button type="submit" class="btn btn-success">Soumettre</button>

                        </div>
                    </form>
                    </div>
                </div>
              
            </div>
          </div>
        </div>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/ass/js/material-dashboard.min.js') }}"></script>
</body>

</html>