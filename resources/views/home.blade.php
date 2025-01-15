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
    </div>
</div>
<div class="container mt-3">
<div class="d-flex justify-content-start text-center">
    <div class="row align-items-start">
        @foreach( $post as item)
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
        @endforeach
    </div>
</div>
</div>
@endsection
