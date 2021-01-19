@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-info text-white" href="{{url('/empresas')}}">
                        Voltar
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))
                        <h1>Editar empresa</h1>
                        <form action="{{url('empresas/update')}}/{{$empresas->id}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control" value="{{$empresas->nome}}">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{$empresas->email}}">
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="website">Website:</label>
                                <input type="website" name="website" class="form-control" value="{{$empresas->website}}">
                            </div>

                            <button class="btn btn-primary">Editar</button>
                        </form>
                    @else
                        <h1>Cadastrar nova empresa</h1>
                        <form action="{{url('empresas/store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="logo" class="form-label">Logo:</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="website">Website:</label>
                                <input type="text" name="website" class="form-control">
                            </div>

                            <button class="btn btn-primary">Cadastrar</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
