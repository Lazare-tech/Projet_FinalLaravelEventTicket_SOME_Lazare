<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <meta name="generator" content="Hugo 0.112.5">
  <title>EasyTicket-Payement</title>
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

    
    <video autoplay muted loop id="bg-video" class="">
      <source src="assets/images/production_id_4440815 (1080p).mp4" type="video/mp4" />
    </video> 

    <div class="video-overlay header-text">
      <div class="caption">
        <h6 >Achat De Billet</h6>
      
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <section class="container">
  
<table class="table">
    <thead>
      <tr>
        <th>Billet</th>
        <th>Quantité</th>
        <th>Prix unitaire</th>
        <th>Montant total</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($billets as $billet)
            <tr>
              <td>{{ $billet->typebillet->typebillet }}</td>
              <td>{{ $billetQuantities[$billet->id] }}</td>
              <td>{{ $billet->prix }} FCFA</td>
              <td>{{ $billetQuantities[$billet->id] * $billet->prix }} FCFA</td>
            </tr>
            @endforeach
       </tr>
    </tbody>
    <tfoot>
        <tr>
          <td colspan="3">Total</td>
          <td>{{ $montantTotal }} FCFA</td>
        </tr>
      </tfoot>
      
  </table>
  
  <div class="mt-3">
    <h5>Options de paiement</h5>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="option-paiement-orange" name="option_paiement" value="orange">
      <label class="form-check-label" for="option-paiement-orange">Orange Money</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="option-paiement-momo" name="option_paiement" value="momo">
      <label class="form-check-label" for="option-paiement-momo">Mobile Money</label>
    </div>
  </div>
  
  <form class="mt-3">
    <div class="mb-3">
      <label for="nom" class="form-label">Nom complet:</label>
      <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->name }}" readonly>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Adresse e-mail:</label>
      <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Payer</button>
  </form>
    
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