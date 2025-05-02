@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $superheroe->nombre_heroe }}</h1>

    <div class="card mb-3" style="max-width: 600px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $superheroe->foto }}" alt="Foto de {{ $superheroe->nombre_heroe }}" class="img-fluid" style="object-fit: cover; height: 100%;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $superheroe->nombre_real }}</h5>
                    <p class="card-text">{{ $superheroe->info_adicional ?: 'Sin información adicional.' }}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">← Volver</a>
    <a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este superhéroe?')">Eliminar</button>
    </form>
</div>
@endsection
