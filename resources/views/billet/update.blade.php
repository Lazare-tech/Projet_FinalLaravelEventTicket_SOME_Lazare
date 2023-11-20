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
    Update billet
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
                    <form action="/update-billet/traitement" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" style="display:none" value="{{ $billet->id }}">

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
                                            id="Image" name="image" value="{{ $billet->photo }}">
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
                                            <option value="{{ $billet->evenement->id }}">{{ $billet->evenement->nom }}</option>
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
                                            id="Prix" name="prix" value="{{ $billet->prix }}">
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
                                            <option value="{{ $billet->typebillet->id }}">{{ $billet->typebillet->typebillet }}</option>
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