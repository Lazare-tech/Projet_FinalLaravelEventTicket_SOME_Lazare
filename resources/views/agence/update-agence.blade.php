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
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
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
                    <div class="card my-4 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agence</h6>
                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="step-container">
                                <form action="/update-agence/traitement" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="step-form pt-1">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div id="step1" class="container ">
                                            <h4></h4>
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <label for="Nom" class="form-label text-muted">Nom de
                                                        l'agence</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('nomAgence') ? 'is-invalid' : '' }}"
                                                        id="nomAgence" name="nomAgence" value="{{ $agence->nom }}">
                                                    @if($errors->has('nomAgence'))
                                                    <span class="invalid-feedback">{{ $errors->first('nomAgence')
                                                        }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="Adresse" class="form-label text-muted">Adresse</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}"
                                                        id="Adresse" name="adresse" value="{{ $agence->adresse }}">
                                                    @if($errors->has('adresse'))
                                                    <span class="invalid-feedback">{{ $errors->first('adresse')
                                                        }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Contact" class="form-label text-muted">Contact</label>
                                                    <input type="text"
                                                        class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}"
                                                        id="Contact" name="contact" value="{{ $agence->contact }}">
                                                    @if($errors->has('contact'))
                                                    <span class="invalid-feedback">{{ $errors->first('contact')
                                                        }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Email" class="form-label text-muted">Email</label>
                                                    <input type="email"
                                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                        id="Email" name="email" value="{{ $agence->email }}">
                                                    @if($errors->has('email'))
                                                    <span class="invalid-feedback">{{ $errors->first('email')
                                                        }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                  <textarea class="form-control {{ $errors->has('description') ? 'is-invalid': '' }}" rows="5" placeholder="Description de l'evenement "
                                                    name="description">{{ $agence->description }}</textarea>
                                                </div>
                                                @if($errors->has('description'))
                                                <span class="invalid-feedback">{{ $errors->first('description') }}</span>
                                                @endif
                                              </div>


                                        </div>


                                        <button type="submit" class="btn btn-success"
                                            id="SUBMIT">Soumettre</button>

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

</body>

</html>