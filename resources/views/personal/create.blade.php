@extends('layouts.plantilla')

@section('title', 'Nuevo Personal')
    
@section('content')
    <h1>Registrar nuevo Personal</h1>
    <form action="{{route('personal.store')}}" method="POST">

        @csrf

        <label for="">Nombre: <br>
            <input type="text" name="nombre">
        </label><br>
        @error('nombre')
            <span>*{{$message}}</span>
            <br>
        @enderror

        <label for="">Email: <br>
            <input type="email" name="email">
        </label><br>
        @error('email')
            <span>*{{$message}}</span>
            <br>
        @enderror

        <label for="">Telefono: <br>
            <input type="tel" name="telefono">
        </label><br>

        <label for="">Dirección: <br>
            <textarea name="direccion" rows="3"></textarea>
        </label><br>

        <label for="">Fecha de Ingreso: <br>
            <input type="date" name="fecha_ingreso">
        </label><br>

        <button type="submit">Registrar</button>

    </form>
@endsection