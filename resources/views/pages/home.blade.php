@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bienvenido a Music-Match</h1>
        <p>Conecta con los mejores músicos para tus eventos.</p>
        <a href="{{ url('/musiclist') }}" class="btn btn-primary">Ver Músicos</a>
    </div>
@endsection

