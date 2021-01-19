@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/empresas')}}" class="btn btn-primary m-1">Voltar</a>
                    <a href="{{url('/empresas/'.$empresas->id.'/funcionarios/create')}}" class="btn btn-primary m-1">Cadastrar funcionário</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Funcionários</h1>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th></th>
                        </thead>
                        <tbody>
                            {{-- {{$funcionarios}} --}}
                            @foreach ($funcionarios as $f)
                                <tr>
                                    <td>{{$f->nome}}</td>
                                    <td>{{$f->email}}</td>
                                    <td>{{$f->telefone}}</td>
                                    <td>
                                        <a href="/funcionarios/show_funcionario/{{$f->id}}/{{$empresas->id}}" class="btn btn-success m-1">Mais Informações</a>
                                        <form action="/funcionarios/destroy/{{$f->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/funcionarios/{{$empresas->id}}/{{$f->id}}/edit" class="btn btn-info m-1">Editar</a>
                                            <button class="btn btn-danger m-1">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$funcionarios->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
