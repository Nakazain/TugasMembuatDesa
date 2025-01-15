<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <!-- <nav class="navbar d-flex navbar-expand-lg bg-body-tertiary" id="navbar" style="padding:10px 15px; position:sticky; top:0; z-index: 10">
  <div class="container-fluid">
    <a class="navbar-brand" href="#home">Desa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#berita">Berita desa</a>
        </li>
      </ul>
  </div>
  </div>
  </nav> -->
  <nav id="navbar-example2" class="navbar bg-body-tertiary px-3" style="position:sticky; top:0; z-index:5">
  <a class="navbar-brand" href="#" style="margin-left: 10px;">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#berita">Berita</a>
    </li>
  </ul>
  </nav>
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example rounded-2" tabindex="0">
    <div class="d-flex-column" id="home" style="padding:100px; background-color:#e3e3e3; margin: 0px 0px 40px 0px">
    <h1 style="font-weight: 700;">Selamat datang di desa!</h1>
    <h2 style="font-weight: 500;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quidem!</h2>
    </div>
    <div class="container" id="berita" style="margin-bottom: 1000px;">
        <h2 class="text-judul">Berita desa</h2>
        <div class="d-flex justify-content-start text-center">
            <div class="row align-items-start">
                <div class="col">
                    <a href="#" class="text-decoration-none">
                    <div class="card" style="width:100%;">
                    <img src="/img/tes.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Judul</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> 
                    </div>
                    </a>
                </div>
                <div class="col">
                  <a href="#" class="text-decoration-none">
                  <div class="card" style="width:100%;">
                  <img src="/img/tes.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div> 
                  </div>
                  </a>
                </div>
                <div class="col">
                  <a href="#" class="text-decoration-none">
                  <div class="card" style="width:100%;">
                  <img src="/img/tes.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div> 
                  </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>