@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Superhéroe</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nombre Real</label>
            <input type="text" name="nombre_real" class="form-control" value="{{ $superheroe->nombre_real }}" required>
        </div>

        <div class="form-group">
            <label>Nombre Héroe</label>
            <input type="text" name="nombre_heroe" class="form-control" value="{{ $superheroe->nombre_heroe }}" required>
        </div>

        <div class="form-group">
            <label>Foto (URL)</label>
            <input type="url" name="foto" class="form-control" value="{{ $superheroe->foto }}" required>
        </div>

        <div class="form-group">
            <label>Información adicional</label>
            <textarea name="info_adicional" class="form-control">{{ $superheroe->info_adicional }}</textarea>
        </div>

        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
