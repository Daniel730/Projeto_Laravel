@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('/empresas/funcionarios/'.$empresas->id.'')}}" class="btn btn-primary">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))
                        <h1>Editar funcionario</h1>
                        <form action="{{url('/funcionarios/update')}}/{{$funcionarios->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" value="{{$funcionarios->nome}}" class="form-control">
                                
                            </div>

                            <div class="form-group">
                                
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <input type="Text" value="{{$funcionarios->telefone}}" id="tel" onkeypress="return isNumber(event)" name="telefone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="CPF">CPF:</label>
                                <input type="text" value="{{$funcionarios->cpf}}" id="cpf" onkeypress="return isNumber(event)" name="cpf" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="cep">CEP:</label>
                                <input type="text" value="{{$funcionarios->cep}}" id="cep" onkeypress="return isNumber(event)" name="cep" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="rua">Rua:</label>
                                <input type="text" value="{{$funcionarios->rua}}" id="rua" name="rua" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="numero">Numero:</label>
                                <input type="text" value="{{$funcionarios->numero}}" name="numero" onkeypress="return isNumber(event)" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro:</label>
                                <input type="text" value="{{$funcionarios->bairro}}" id="bairro" name="bairro" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="cidade">Cidade:</label>
                                <input type="text" value="{{$funcionarios->cidade}}" id="cidade" name="cidade" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado:</label>
                                <input type="text" value="{{$funcionarios->estado}}" id="estado" name="estado" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="empresa">Empresa:</label>
                                <input type="text" name="empresa" class="form-control" value="{{$empresas->nome}}" disabled>
                            </div>

                            <input type="hidden" name="empresa_id" value="{{$empresas->id}}">

                            <button class="btn btn-primary">Editar</button>
                        </form>
                    @else
                        <h1>Cadastrar novo funcionario</h1>
                        <form action="{{url('/funcionarios/store')}}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-12">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="Email">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="telefone">Telefone:</label>
                                <input type="Text" id="tel" onkeypress="return isNumber(event)" name="telefone" class="form-control">
                            </div>

                            <div class="col-md-8">
                                <label for="CPF">CPF:</label>
                                <input type="text" id="cpf" onkeypress="return isNumber(event)" name="cpf" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" onkeypress="return isNumber(event)" name="cep" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label for="rua">Rua:</label>
                                <input type="text" id="rua" name="rua" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label for="numero">Numero:</label>
                                <input type="text" name="numero" onkeypress="return isNumber(event)" class="form-control">
                            </div>

                            <div class="col-md-10">
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" name="bairro" class="form-control">
                            </div>

                            <div class="col-md-10">
                                <label for="cidade">Cidade:</label>
                                <input type="text" id="cidade" name="cidade" class="form-control">
                            </div>

                            <div class="col-md-2">
                                <label for="estado">Estado:</label>
                                <input type="text" id="estado" name="estado" class="form-control">
                            </div>

                            <div class="col-md-12 mb-2">
                                <label for="empresa">Empresa:</label>
                                <input type="text" name="empresa" class="form-control" value="{{$empresas->nome}}" disabled>
                            </div>

                            <div class="col-md-12 text-center mb-2">
                                <input type="hidden" name="empresa_id" value="{{$empresas->id}}">

                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
