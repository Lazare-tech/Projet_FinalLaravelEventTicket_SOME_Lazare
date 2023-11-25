
<header class="main-header clearfix" role="header">  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="logo">
      <a href="#"><em>Easy</em>Ticket</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-5" id="navbarScroll">
      @auth
      @if( auth()->user()->role_id == 2)
   
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item">
          <a class="nav-link active text-white fw-bold" aria-current="page" href="/">ACCEUIL</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.apropos') }}">A PROPOS</a>

        </li>
          @if(auth()->user()->agence)
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{  route('agence.create-evenement') }}">CREER UN EVENEMENT</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{  route('agence.create-agence') }}">CREER UN EVENEMENT</a>
        </li>
        @endif   
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.contact') }}">CONTACTS</a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.faq') }}">FAQ</a>

        </li>
      </ul>
      @elseif( auth()->user()->role_id != 2)
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item">
          <a class="nav-link active text-white fw-bold" aria-current="page" href="/">ACCEUIL</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.apropos') }}">A PROPOS</a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.contact') }}">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.faq') }}">FAQ</a>
        </li>

      </ul>
      @endif

      @endauth
      @guest
        
      
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item">
          <a class="nav-link active text-white fw-bold" aria-current="page" href="/">ACCEUIL</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.apropos') }}">A PROPOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.contact') }}">CONTACTS</a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="{{ route('menu.faq') }}">FAQ</a>

        </li>
      </ul>
     @endguest

       <div class="">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <div class="d-flex align-items-center">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <button class="bouton text-white pt-2">
                        {{ Auth::user()->name }}
                    </button>
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="se_deconnecter pt-2">{{ __('Deconnexion') }}</button>
                </form>
            </div>
            @else
            <a href="{{ route('login') }}"><button class="se_connecter text-white">Se connecter</button></a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}"><button class="sinscrire">S'inscrire</button></a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    </div>                                                                                            
                                                                

    </div>
  </div>
</nav>
</header>