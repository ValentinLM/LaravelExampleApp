@extends('layouts.plantilla')

@section('title', 'Crea Cursos')

@section('content')
    <h1>En esta página puedes crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        <!-- token -->
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Crear Curso</button>
    </form>
@endsection