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
  <div class="container" style="margin-top: 20px;">
      <h1>{{$post->judul}}</h1>
      <img src="/storage/{{$post->gambar}}" alt="{{$post->judul}}" width="600px" style="border-radius: 10px;">
      <p>{{ \Carbon\Carbon::parse($post->created_at)->locale('id')->isoFormat('dddd, D MMMM Y | hh:mm') }} WIB</p>
      <p>{{$post->deskripsi}}</p>
  </div>
</body>
</html>