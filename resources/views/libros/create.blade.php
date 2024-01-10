@extends('plantilla')

@section('titulo', 'Crear un libro')

@section('contenido')
    <h1>Creación de libros</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" name="titulo"
        id="titulo">
        </div>
        <div class="form-group">
        <label for="editorial">Editorial:</label>
        <input type="text" class="form-control" name="editorial"
        id="editorial">
        </div>
        <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" class="form-control" name="precio"
        id="precio">
        </div>
        <div class="form-group">
        <label for="autor">Autor:</label>
        <select class="form-control" name="autor" id="autor">
        @foreach ($autores as $autor)
        <option value="{{ $autor->id }}">
        {{ $autor->nombre }}
        </option>
        @endforeach
        </select>
        </div>
        <input type="submit" name="enviar" value="Enviar"
        class="btn btn-dark btn-block">
        </form>
@endsection