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
    {{-- <div class="container-fluid" id="bg-video">
      <img src="../images/istockphoto-1482176963-612x612.jpg" alt="" class="i">
    </div> --}}

    <video autoplay muted loop id="bg-video-detail">
      <source src="assets/images/production_id_4440815 (1080p).mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h2>plonger dans une atmosphère unique.</h2>
        <h6>Bienvenue à l'événement exclusif</h6>
        <h2><em>{{ $evenements->nom }}</em></h2>

        {{--
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="#trouver-evenement"><button type="button"
              class=" btn-lg px-4 text-white fw-bold gap-3 trouvez_des_evenement">Trouvez des evenements</button></a>
          <button type="button" class="px-4 text-dark creez_un_evenement fw-bold">Achetez un billet</button>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <div class="container-fluid pt-3">
    <div class="row mx-5">
      <div class="col-md-6">
        <img src="{{ asset('storage/' . $evenements->photo) }}" class="img-fluid" alt="{{ $evenements->nom }}"
          style="width: 36rem">

      </div>
      <div class="col-md-6">
        <h4 class="mb-4"><strong>{{ $evenements->nom }}</strong></h4>
        <h4 class=" mb-2"><span class="type-evenement"> Type d'evenement</span></h5>
          <h6>{{ $evenements->categorie->nom }}</h6>
          <h6 class="mt-4">
            Partager:
            <i class="fab fa-facebook fa-2x mx-2"></i>
            <i class="fab fa-whatsapp-square fa-2x mx-2"></i>
            <i class="fab fa-twitter-square fa-2x mx-2"></i>
            <i class="fab fa-instagram-square fa-2x mx-2"></i>
          </h6>
          <ul class="list-unstyled mt-4 mb-3">
            <h5><span class="info-sur-ce-evenement">Infos sur ce evenement</span> </h5>
            <li><span class="text-muted">Lieu:</span>{{ $evenements->lieu }}</li>
            <li><strong>Date de début:</strong> {{ $evenements->date_debut }}</li>
            <li><strong>Date de fin:</strong> {{ $evenements->date_fin }}</li>
          </ul>
          <h5><span class="info-sur-ce-evenement ">Brief de l'evenement</span> </h5>
          <p class=" text-muted">{{ $evenements->resume }}
            Exercitation ex et cupidatat officia non Lorem magna sit nisi quis deserunt. Tempor excepteur ad ad aliqua
            dolor adipisicing quis duis duis Lorem quis. Anim anim velit mollit id ex reprehenderit veniam voluptate
            mollit aliquip ad.

          </p>
          <button type="button" class="acheter" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Acheter maintenant</button>
          <form action="{{ route('evenement.payer') }}" method="POST">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Billets-{{ $evenements->nom }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    @foreach ($billets as $billet)
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="{{ $billet->id }}" name="billet_id[]"
                        value="{{ $billet->id }}">
                      <label class="form-check-label" for="{{ $billet->id }}">{{ $billet->nom }}</label>
                      <span class="ms-3">{{ $billet->typebillet->typebillet }}</span>
                      <span class="float-end">{{ $billet->prix }}FCFA</span>

                      <div class="d-flex mt-2">
                        <label for="quantity-{{ $billet->id }}" class="form-label">Quantité:</label>
                        <input type="number" class="form-control ms-2" id="quantity-{{ $billet->id }}"
                          name="quantity[{{ $billet->id }}]" min="1" value="{{ old('quantity.' . $billet->id) }}">
                      </div>
                    </div>

                    <hr>
                    @endforeach
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <input type="submit" class="" value="Payer">
                  </div>
          </form>
      </div>
    </div>
  </div>

  </div>

  </div>

  <div class="container my-4 ">
    <button class="description_evenement mb-2">Description de l'evenement </button>
    <div class="position-relative p-4 text-center  bg-body border border-dashed rounded-5">
      <p class="col-lg-6 mb-4 ">
        {{ $evenements->description }}
        Ad ut mollit duis nisi ad. Laboris proident ad dolor sit velit commodo culpa exercitation nostrud reprehenderit
        sint culpa. Sint consectetur pariatur exercitation quis ex excepteur est. Aliqua fugiat nostrud non enim.
      </p>

    </div>
  </div>
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
</body>

</html>