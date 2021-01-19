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
                    <h1>Seja bem vindo, <Strong class="text-primary">{{ Auth::user()->name }}</Strong>!</h1>
                    <a class="btn btn-primary" href="{{url('empresas')}}">Listar empresas</a>   
                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                        Sair
                    </a>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
