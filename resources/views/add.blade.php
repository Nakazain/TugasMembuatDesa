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
  <div class="container" style="margin: 70px 100px;">
    <div class="card">
      <div class="card-header bg-info">Masukan Berita</div>
      <div class="card-body">
        <form method="POST" action="/tambahdata" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Berita</label>
          <input type="text" class="form-control" name="judul" id="judul" aria-describedby="judul">
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Isi berita</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="gambar" id="gambar">
          <label class="input-group-text" for="gambar">Masukan Gambar</label>
        </div>
        <button type="submit" class="btn btn-info">Buat Berita</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>