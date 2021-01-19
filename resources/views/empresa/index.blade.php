@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Empresas</h1>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <th></th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>
                                <div class="text-center">
                                    <a class="btn btn-success" href="{{url('empresas/create')}}">
                                        Add Empresa
                                    </a>
                                </div>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $e)
                                <tr>
                                    <td class="text-center">
                                        <img src={{asset('storage/'.$e->logo)}} class="img-thumbnail" alt="{{$e->logo}}">
                                    </td>
                                    <td style="width: 200px; text-align: center">{{$e->nome}}</td>
                                    <td>{{$e->email}}</td>
                                    <td>{{$e->website}}</td>
                                    <td>
                                        <a href="empresas/funcionarios/{{$e->id}}" class="btn btn-success m-1">Funcionarios</a>
                                        <form action="empresas/destroy/{{$e->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="text-center">
                                                <a href="empresas/{{$e->id}}/edit" class="btn btn-info text-white">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <button class="btn btn-danger m-1">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                           
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$empresas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
