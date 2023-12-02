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
          <a href="#trouver-evenement"><button type="button"
              class=" btn-lg px-4 text-white fw-bold gap-3 trouvez_des_evenement">Trouvez des evenements</button></a>
          <button type="button" class="px-4 text-dark creez_un_evenement fw-bold">Achetez un billet</button>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
<!-- form contact -->
<section class="section contact" data-section="section6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Nous contacter</h2>
          </div>
                  
          @if (session('status'))
          <div class="alert alert-success text-white">
            {{ session('status') }}
          </div>
          @endif
        </div>
        <div class="col-md-8">
          <form id="contact" action="/contact/traitement" method="post">
            <div class="row">
              <div class="col-md-8">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                  </fieldset>
                </div>
                <div class="col-md-8">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="" class="">Envoyer</button>
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