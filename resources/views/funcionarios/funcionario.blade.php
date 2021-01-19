@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/empresas/funcionarios/'.$empresas->id)}}" class="btn btn-primary m-1">Voltar</a>
                </div>
                <div class="card-body">
                    <div class="card bg-dark mb-3">
                        <div class="card-header text-white text-center">
                            <strong>Dados do funcionário: </strong>{{$funcionario->nome}}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Email: </strong>{{$funcionario->email}}</li>
                            <li class="list-group-item"><strong>Telefone: </strong>{{$funcionario->telefone}}</li>
                            <li class="list-group-item"><strong>CPF: </strong>{{$funcionario->cpf}}</li>
                            <li class="list-group-item"><strong>CEP: </strong>{{$funcionario->cep}}</li>
                            <li class="list-group-item"><strong>Rua: </strong>{{$funcionario->rua}}</li>
                            <li class="list-group-item"><strong>Número: </strong>{{$funcionario->numero}}</li>
                            <li class="list-group-item"><strong>Bairro: </strong>{{$funcionario->bairro}}</li>
                            <li class="list-group-item"><strong>Cidade: </strong>{{$funcionario->cidade}}</li>
                            <li class="list-group-item"><strong>Estado: </strong>{{$funcionario->estado}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
