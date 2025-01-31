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
<div style="background-color: gray; padding-block:200px; display:flex; justify-content:center">
<h1 style="font-weight: 800;">Selamat datang di desa</h1>
</div>
<div class="container my-5">
        <div class="row align-items-center">
            <!-- Kolom Teks -->
            <div class="col-md-8">
            <h2 class="text-danger mb-3 pb-2 border-bottom border-danger d-inline-block">
                SAMBUTAN KEPALA DESA
            </h2>
            <h3 class="text-dark mb-4 mt-3">John Doe, S.H.</h3>
            <p class="lead text-secondary" style="line-height: 1.8;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
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
</body>
</html>