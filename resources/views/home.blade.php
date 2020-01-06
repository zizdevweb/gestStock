@extends('layouts.accueil')

@section('contenu')
@section('search')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert-success">Statut</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div>
    <h3>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><img src="/img/logo.png" alt="logo" width="200px"></div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-6"><img src="/img/logo.png" alt="logo" width="350px"></div>
        <div class="col-6"><img src="/img/logo.png" alt="logo" width="350px"></div>
    </div>
    
    </h3>
</div>
@endsection
