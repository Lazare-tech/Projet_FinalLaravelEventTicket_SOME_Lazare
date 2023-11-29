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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  <style>

  </style>
</head>

<body>
  @include('navbar.navbar')

{{-- 
<section class="hero-section pt-5" style="background-image: url('images/live-music-2219036_960_720.jpg'); background-color: rgba(0, 0, 0, 0.6);">
    <div class="container">
        <div class="hero-content text-white">
            <h1 class="hero-title">Découvrez des événements inspirants</h1>
            <p class="hero-text">Parcourez une sélection d'événements captivants qui se déroulent à travers le monde.</p>
            <a href="#" class="hero-button btn btn-primary">Voir tous les événements</a>
        </div>
    </div>
</section> --}}

<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="assets/images/production_id_4440815 (1080p).mp4" type="video/mp4" />
  </video>
 
  <div class="video-overlay header-text">
    <div class="caption">
      <h6>Decouvrez l'Experience Ultime</h6>
      <h2><em>Decouvrez des evenements</em>inspirants</h2>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <p class="hero-text text-white">Parcourez une sélection d'événements captivants qui se déroulent à travers le monde.</p>

          </div>
    </div>
  </div>
</section>

  <!-- <hr class="container mt-5"> -->
  <section class="container-fluid condition mt-5">
    <section class="container ">

      <div class="row pt-3">
        <h5 class="card-title text-center text-warning ">Evenememts</h5>
        <p class="text-center fs-5">Particiez aux evenements qui vous inspirent a travers le monde</p>
        <a href="#"><button class="voir_tous_evenement">Vos evenements</button></a>
      </div>


      <div class="row row-cols-1 row-cols-md-3 g-4 pb-4 pt-3 ">
        @foreach ($evenements as $evenements )

        <div class="col-lg-4 ">
          <div class="card card-evenement">
            <img src="{{ asset('storage/' . $evenements->photo) }}" class="card-img-top card-evenement-photo"
              alt="Evenement" />

            <div class="card-body">
              <a href="{{ route('detail', ['id' => $evenements->id ]) }}"><button class="voir_plus float-end plus"><i
                    class="fas fa-plus"></i></button></a>

              <div class="it mt-4 mb-3">
                <i class="fas fa-table fa-1x " style="color: #1f5135;"></i>
                <span class="evenement-titre ">{{ $evenements->date_debut }} </span><br>
                <i class="fas fa-map-marker-alt fa-1x mt-2" style="color: #1f5129;"></i>
                <span class="evenement-titre ">{{ $evenements->lieu }}</span>

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
            <!-- Add the label in the top-right corner -->
            <div class="event-label">
              <!-- You can customize the label text based on whether it's new or in a few days -->
              <span class="label-text">{{ $evenements->etat->nom }}</span>
            </div>
          </div>
        </div>

        @endforeach



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
  </div>


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

  <script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('show');
    }

    // Fermer le dropdown si l'utilisateur clique en dehors de celui-ci
    window.onclick = function(event) {
        if (!event.target.matches('.bouton')) {
            var dropdowns = document.getElementsByClassName('dropdown-menu');
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</body>

</html>