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
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-inline: 1%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup" style="margin-right: 7%;">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
<div style="background-image: url('/img/bg.png'); background-size: cover; background-position: center; min-height: 100vh;" 
     class="d-flex flex-column justify-content-center align-items-center text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1 class="fw-bold text-white mb-4 display-3">
                    Selamat datang di desa
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
        <div class="row align-items-center">
            <!-- Kolom Teks -->
            <div class="col-md-8">
            <h2 class="text-danger mb-3 pb-2 d-inline-block">
                SAMBUTAN KEPALA DESA
            </h2>
        </div>
        <!-- Kolom Gambar -->
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <div class="rounded-circle bg-danger p-4 d-inline-block">
                <img src="/img/kepala.png" 
                     alt="Kepala Desa"
                     class="rounded-circle"
                     style="width: 250px; height: 250px; object-fit: cover; border: 4px solid white">
            </div>
        </div>
    </div>
</div>
<div class="container">
  <h2 class="text-center mb-3">Kabar Ajibarang Kulon</h2>
  <div class="container text-center">
    <div class="row">
      @foreach ($post as $item)
      <div class="col-md-4 mb-3">
        <a href="/detail/{{$item->id}}">
          <img src="/storage/{{$item->gambar}}" width="100%" class="img-fluid">
          <h3 class="mt-2">{{$item->judul}}</h3>
          <p>Oleh : Admin | Pada : {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
</body>
</html>