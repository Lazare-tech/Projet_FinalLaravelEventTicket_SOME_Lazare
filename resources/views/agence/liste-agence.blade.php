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
                  <h6 class="text-white text-capitalize ps-3">Evenements</h6>
                </div>
              </div>

              <div class="card-body px-0 pb-2">
                <a href="{{ route('agence.create-agence') }}" ><button class="btn btn-primary">Creer le ptofile de votre agence</button></a>

                <div class="table-responsive p-0">
                
                  <table class="table align-items-center mb-0">
                  
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adresse</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>

                        <th class="text-secondary opacity-7">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
      
                       @if (session('status'))
                     <div class="alert alert-success">
                        {{ session('status') }}
                        </div> 
                    @endif
                    @if (auth()->user()->agence)
                        @foreach ($agence as $agence)
                          
                      <tr>
                        
                        <td>
                          <p class="text-lg font-weight-bold mb-0">{{ $agence->nom }}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-lg font-weight-bold mb-0">{{ $agence->contact }}</p>

                        </td>
                        <td class="align-middle text-center">
                          <p class="text-lg font-weight-bold mb-0">{{ $agence->adresse }}</p>

                        </td>
                        <td class="align-middle text-center">
                            <p class="text-lg font-weight-bold mb-0">{{ $agence->email}}</p>
  
                          </td>
                          <td class="align-middle text-center">
                            <p class="text-lg font-weight-bold mb-0">{{ $agence->description}}</p>
  
                          </td>
                     
                        <td>
                            <a href="/update-agence/{{ $agence->id }}" class="btn btn-primary">Update</a>
                            <a href="/delete-agence/{{ $agence->id }}" class="btn btn-danger">Delete</a>
          
                          </td>
                      </tr>
                      @endforeach

                      @else
                      <div class="alert alert-success">
                        Creer votre profile agence
                        </div> 
                        @endif
                        </tbody>
                  </table>
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