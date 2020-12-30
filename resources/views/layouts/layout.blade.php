<!DOCTYPE html>
<html>
<head>
    <title>Tribu Pañalera @yield('post')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
</head>
</head>
<body>
  <!-- Logo -
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo.png')}}" width="100" alt="" loading="lazy">

            </a>
        </div>
    </nav>
-->
<nav class="navbar navbar-expand-lg navbar-light  bg-main px-5 py-4">
           <a class="navbar-brand m-auto" href="{{route('index')}}">
           <!--   <img src="{{asset('images/logo.png')}}" width="200" alt="" loading="lazy">-->
           <a class="navbar-brand mr-auto" style="font-family: 'Dancing Script';font-size: 32px;" href="{{route('index')}}">Tribu Pañalera - Tucuman</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto" style="font-family: 'Dancing Script';font-size: 22px;">
                    <a class="nav-link active" href="{{route('index')}}">Información de Pañales</a>
                    <a class="nav-link" href="{{route('about')}}">Sobre Nosotras</a>
                    <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                </div>
            </div>
</nav>


    <!-- Contenido -->






@yield('content')  @section('content')

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <h2 style="font-family: 'Dancing Script';font-size: 22px;"> Tribu Pañalera .Tucumán</h2>
            </div>
            <div id="col-md-10">
                <a href="https://web.facebook.com/tribupanaleratuc">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook tribupanaleratuc">
                </a>
                <a href="https://www.instagram.com/tribupatuc/">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram tribupanaleratuc">
                </a>
                <p class="mt-3">Copyright © 2020 KDavidovich <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>