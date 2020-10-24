@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (Request::is('*/editar'))
            <div class="card">
                <div class="card-header"><h1>Alterar Veículo</h1></div>
                <div class="card-body">
                    <form method="POST" action="{{ url('veiculos/atualizar') }}/{{ $veiculo->id }}">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputEmail4">Marca</label>
                            <input type="text" name="marca_veiculo" class="form-control" id="" value="{{$veiculo->marca}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Modelo</label>
                            <input type="text"  name="modelo_veiculo" class="form-control" id="" value="{{$veiculo->nome}}">
                          </div>
                        
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Categoria</label>
                            <input type="text" name="categoria_veiculo" class="form-control" id="" value="{{$veiculo->categoria}}">
                          </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                      </form>
                    
                </div><!-- se for editar mostrar -->
            @else
            <div class="card">
                <div class="card-header"><h1>Cadastrar Novo Veículo</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('veiculos/salvar')}}">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputEmail4">Marca</label>
                            <input type="text" name="marca_veiculo" class="form-control" id="">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Modelo</label>
                            <input type="text"  name="modelo_veiculo" class="form-control" id="">
                          </div>
                        
                          <div class="form-group col-md-4">
                            <label for="inputPassword4">Categoria</label>
                            <input type="text" name="categoria_veiculo" class="form-control" id="">
                          </div>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                      </form>
                    
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
