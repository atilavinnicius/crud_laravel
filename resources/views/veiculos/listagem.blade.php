@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1>Listagem de Veículos</h1></div>
                <a href="{{ url('/veiculos/formulario')}}" class="btn btn-primary col-md-3">Cadastrar Novo Veículo</a>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($veiculos as $v)
                          <tr>
                            <th scope="row">{{ $v->id }}</th>
                            <td>{{ $v->marca}}</td>
                            <td>{{ $v->nome}}</td>
                            <td>{{ $v->categoria}}</td>
                            <td>
                                <a href="veiculos/{{ $v->id}}/editar" class="btn btn-warning col-md-3">Editar</a>
                                <a href="veiculos/{{ $v->id}}/deletar" class="btn btn-danger col-md-3">Apagar</a>
                            </td>
                          </tr>
                        @endforeach
                        
                        </tbody>
                       
                      </table>
                      <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                          <li class="page-item">{{ $veiculos->links() }}</li>
                        </ul>
                      </nav>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
