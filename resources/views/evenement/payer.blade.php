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
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/paiement.webp), no-repeat center center;
    background-size: cover;
    height: 60vh;
  }


  </style>
</head>

<body>
  @include('navbar.navbar')

  <!-- ***** Main Banner Area Start ***** -->
  <div class="container-fluid page-header ">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class=" text-white text-center pt-5">Obtenez votre billet maintenant</h3>
            <h3 class="text-white text-center">Votre partenaire pour des événements inoubliables</h3>
            <!-- Ajoutez une description supplémentaire si nécessaire -->
            <div class="d-inline-flex text-white">
                {{-- <p class="m-0 text-uppercase"><a class="text-white" href="">Accueil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p> --}}
            </div>
        </div>
    </div>
</div>
  <!-- ***** Main Banner Area End ***** -->
  <section class="container">
  <div class="row">
  
    <div class="col-lg-6 "  style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
    
      <form class="mt-3 ">
        <h4 class="">Details de l'achat du billet</h4>
        <div class="mb-3">
        
          <label for="nom" class="form-label">Nom complet:</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->name }}" readonly>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Adresse e-mail:</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
        </div>
      </form>
      <p class="text-muted mt-5">Veuillez verifier votre adresse e-mail afin de recevoir le(s) billet(s)</p>
    </div>
    <div class="col-lg-6 mt-5"  style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

      <table class="table">
        <thead>
        <tr>
          <th colspan="4">       
            <span class="text-center">Commande pour {{ $evenements->nom }}</span>
          </th> 
        </tr>
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
            <td colspan="3" class=""><strong>Total</strong></td>
            <td><strong>{{ $montantTotal }} FCFA</strong></td>
          </tr>
        </tfoot>
  
      </table>
    </div>
      
    </div>
  
  </div>
   

    <section class="container mb-5">

      <div class="row mt-5">
        <div class="col-lg-6"></div>
        <div class="col-lg-6" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">

          <div class="">
            <h5>Options de paiement</h5>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="option-paiement-orange" name="option_paiement"
                value="orange" onclick="togglePaymentDetails('orange')">
              <label class="form-check-label" for="option-paiement-orange">Orange Money</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="option-paiement-momo" name="option_paiement"
                value="momo" onclick="togglePaymentDetails('momo')">
              <label class="form-check-label" for="option-paiement-momo">Mobile Money</label>
            </div>
        
            <!-- Input and button for payment details -->
            <div id="payment-details-orange" style="display: none;">
              <input type="text" id="payment-number" name="payment_number" class="form-control" placeholder="Numero de telephone">
              <button type="button" class="valider_paiement  mt-3 mb-2">Valider le paiement</button>
            </div>
        
            <div id="payment-details-momo" style="display: none;" >
              <input type="text" id="payment-number" name="payment_number" class="form-control" placeholder="Numero de telephone">
              <button type="button" class="valider_paiement mt-3 mb-2">Valider le paiement</button>
            </div>
          </div>
        </div>
        
        <script>
        function togglePaymentDetails(option) {
          // Hide all payment details divs
          document.getElementById('payment-details-orange').style.display = 'none';
          document.getElementById('payment-details-momo').style.display = 'none';
        
          // Show the selected payment details div
          document.getElementById('payment-details-' + option).style.display = 'block';
        }
        </script>
        
      </div>
    </section>


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