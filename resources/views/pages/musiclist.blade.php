@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Músicos</h2>
    <div class="row">
        <!-- Músico 1 -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Nombre del Músico 1</h5>
                </div>
                <div class="card-body">
                    <p><strong>Biografía:</strong> Breve descripción del músico.</p>
                    <a href="{{ url('/profilemusic1') }}" class="btn btn-primary">Ver Perfil</a>
                </div>
            </div>
        </div>

        <!-- Músico 2 -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Nombre del Músico 2</h5>
                </div>
                <div class="card-body">
                    <p><strong>Biografía:</strong> Breve descripción del músico.</p>
                    <a href="{{ url('/profilemusic2') }}" class="btn btn-primary">Ver Perfil</a>
                </div>
            </div>
        </div>

        <!-- Músico 3 -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Nombre del Músico 3</h5>
                </div>
                <div class="card-body">
                    <p><strong>Biografía:</strong> Breve descripción del músico.</p>
                    <a href="{{ url('/profilemusic3') }}" class="btn btn-primary">Ver Perfil</a>
                </div>
            </div>
        </div>
        
        <!-- Agregar más músicos de manera similar -->
    </div>
</div>
@endsection
