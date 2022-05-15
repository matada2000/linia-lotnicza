<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="{{URL::asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/carousel.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Linia Lotnicza</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="/harmonogram">Harmonogram</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lotniska</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pomoc</a>
          </li>
        </ul>
        @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                @auth
                  <a class="nav-link" href="{{ url('/user/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Panel zarządzania</a>
                @else
                  <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">logowanie</a>

                @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Rejestracja</a>
                @endif
              @endauth
            </ul>
          </div>
        @endif
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slide1.jpg">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="color: black">Już teraz kup bilet</h1>
            <p style="color: black" >Zarejestruj się by dostać dostęp do panelu użytkownika, a następnie kupić bilet</p>
            <p><a class="btn btn-lg btn-primary" href="/register">Zarejestruj się</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/slide2.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color: silver">Dowiedz się co nowego</h1>
            <p style="color: silver">Zobacz jakie linie zostały dodane lub odwołane</p>
            <p><a class="btn btn-lg btn-primary" href="#">Dowiedz się więcej</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="images/slide3.jpg">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 style="color: white">Niesamowite podróże</h1>
            <p style="color: white">Zobacz pełną galerie zdjęć ze wszystkich dostępnych u nas lotnisk</p>
            <p><a class="btn btn-lg btn-primary" href="#">Przeglądaj galerie</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="images/Bagazz.jpg" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <h2>Bagaż</h2>
        <p>Sprawdź czy twój bagaż ma odpowiednią wagę lub poszukaj informacji na ten temat. </p>
        <p><a class="btn btn-secondary" href="#">Sprawdź szczegóły &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" src="images/Pracownicyy.jpg" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
        
        <h2>Pracownicy</h2>
        <p>Od kokpitu i kabiny, od hangarów inżynieryjnych po naszą siedzibę główną, chcemy zespołu, który jest innowacyjny, szybko działający i pracowity.</p>
        <p><a class="btn btn-secondary" href="#">Sprawdź szczegóły &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" src="images/Magazynn5.jpg" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
        
        <h2>Magazyn pokładowy</h2>
        <p>Zobacz jakie ciepłe posiłki i produkty możesz zamówić podczas podróży.</p>
        <p><a class="btn btn-secondary" href="#">Sprawdź szczegóły &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Port lotniczy Atlanta <br><span class="text-muted">Hartsfield-Jackson</span></h2>
        <p class="lead">Największe na świecie międzynarodowe lotnisko położone w Atlancie, w stanie Georgia, USA, główny węzeł amerykańskich linii lotniczych Delta Air Lines.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/promo1.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Port lotniczy Frankfurt <br><span class="text-muted">Rhein-Main-Flughafen</span></h2>
        <p class="lead">największy port lotniczy w Niemczech, usytuowany we Frankfurcie nad Menem, w dzielnicy Flughafen. Operatorem zarządzającym portem jest spółka Fraport.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/promo2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Port lotniczy Londyn-Heathrow <span class="text-muted">British Airports Authority</span></h2>
        <p class="lead"> port lotniczy na zachodnim skraju Londynu, położony 24 km od centrum miasta, będący największym lotniskiem Europy.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/promo3.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="{{URL::asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

      
  </body>
</html>