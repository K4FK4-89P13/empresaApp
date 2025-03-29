@extends('layouts.plantilla')

@section('title', 'Personal')

@section('content')

    <a href="{{route('personal.index')}}">Regresar a la lista Personal</a>

    <h1>{{$personal->nombre}}</h1>
    <p>Email: {{$personal->email}}</p>
    <p>Telefono: {{$personal->telefono}}</p>
    <p>Direccion: {{$personal->direccion}}</p>
    <p>Fecha de Ingreso: {{$personal->fecha_ingreso}}</p>

    <form action="{{route('personal.destroy', $personal)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('¿Estas seguro de eliminar este registro?')">Eliminar</button>
    </form>
@endsection