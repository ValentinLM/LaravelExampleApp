@extends('layouts.plantilla')

@section('title', 'Edita Cursos')

@section('content')
    <h1>En esta página puedes editar cursos</h1>
    <a href="{{route('cursos.show', $curso)}}"> Volver a curso </a>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        <!-- token -->
        @csrf
        <!-- En html sólo se puede poner POST y GET. Esto nos ayuda a Laravel que método es-->
        @method('PUT')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <select name="categoria">
                <option>Desarrollo web</option>
                <option>Diseño web</option>
            </select>
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Curso</button>
    </form>
@endsection