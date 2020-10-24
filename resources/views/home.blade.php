@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Painel</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Veículos <span class="alert alert-primary" role="alert">{{ $veiculo}}</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
