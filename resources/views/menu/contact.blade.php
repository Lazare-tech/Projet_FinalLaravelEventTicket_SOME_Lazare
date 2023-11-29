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
  <link rel="stylesheet" href="{{ asset('assets/css/style_index.css') }}">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/jumbotrons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/featuresIconGrid.css')  }}">
  
  <link rel="stylesheet" href="">

  <!-- Bootstrap core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Additional CSS Files -->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
  
  <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
  <style>

.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/contact.jpg), no-repeat center center;
    background-size: cover;
    height: 70vh;
  }

  </style>
</head>

<body>
  @include('navbar.navbar')

 
  <!-- ***** Main Banner Area Start ***** -->
   <div class="container-fluid page-header ">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-5 text-white text-center pt-5">Contact</h3>
                <h3 class="text-white text-center">Nous sommes disposer a vous ecouter</h3>
                <div class="d-inline-flex text-white">
                    {{-- <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p> --}}
                </div>
            </div>
        </div>
    </div>
  <!-- ***** Main Banner Area End ***** -->
<!-- form contact -->
<section class="section contact" data-section="section6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="section-heading">
            <a href="#nous_contacter"><h2>Nous contacter</h2><a href=""></a>
          </div>
        </div>
        <div class="col-md-8" id="nous_contacter">
          <form id="contact" action="/contact/traitement" method="post">
            <div class="row">
              <div class="col-md-8">
                  <fieldset>
                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Votre nom">
                  
                  </fieldset>
                  @if($errors->has('name'))
                  <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="col-md-8">
                  <fieldset>
                    <input name="email" type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"" id="email" placeholder="Email" >
                  </fieldset>
                  @if($errors->has('email'))
                  <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"" id="message" placeholder="Ecrivez votre message..." ></textarea>
                </fieldset>
                @if($errors->has('message'))
                <span class="invalid-feedback">{{ $errors->first('message') }}</span>
                @endif
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
  
  <div class="b-example-divider " style="background: #162238;;"></div>
  <!-- Carousel wrapper -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>