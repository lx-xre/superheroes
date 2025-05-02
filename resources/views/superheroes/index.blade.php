@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-3">Agregar nuevo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre Real</th>
                <th>Nombre Héroe</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $hero)
            <tr>
                <td>{{ $hero->nombre_real }}</td>
                <td>{{ $hero->nombre_heroe }}</td>
                <td><img src="{{ $hero->foto }}" width="100" alt="Foto de {{ $hero->nombre_heroe }}"></td>
                <td>
                    <a href="{{ route('superheroes.show', $hero->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('superheroes.edit', $hero->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
