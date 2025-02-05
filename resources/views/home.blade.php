@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">Jumlah berita</div>
                <div class="card-body"><p style="font-size: 40px; font-weight:700; line-height:40px;">100</p></div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="/add" class="btn btn-outline-primary btn-lg" style="padding-inline: 100px; margin-top:15px">Tambah data</a>
        </div>

    </div>
</div>
<div class="container mt-3">
<div class="d-flex justify-content-start text-center">
    <div class="row align-items-start">
        @foreach ($post as $item)
        <div class="col">
            <a href="/detail/{{$item->id}}" class="text-decoration-none">
            <div class="card" style="width:100%;">
                <img src="/storage/{{$item->gambar}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y | hh:mm') }} WIB</p>
                    <p class="card-text line-clamp-1">{{$item->deskripsi}}</p>
                </div> 
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
