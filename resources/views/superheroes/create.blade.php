@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Superhéroe</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nombre Real</label>
            <input type="text" name="nombre_real" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nombre Héroe</label>
            <input type="text" name="nombre_heroe" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Foto (URL)</label>
            <input type="url" name="foto" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Información adicional</label>
            <textarea name="info_adicional" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Crear</button>
    </form>
</div>
@endsection
