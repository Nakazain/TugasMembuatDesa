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
        </div>
    </div>
</div>
<div class="container text-center" style="margin-top: 10px;">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Jumlah berita</div>
                <div class="card-body"><p style="font-size: 40px; font-weight:700; line-height:40px;">100</p></div>
            </div>
        </div>
        <div class="col">
        <div class="card">
                <div class="card-header">Jumlah Admin</div>
                <div class="card-body"><p style="font-size: 40px; font-weight:700; line-height:40px;">100</p></div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-title"></div>
</div>
@endsection
