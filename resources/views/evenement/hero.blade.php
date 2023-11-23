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
</body>
</html>