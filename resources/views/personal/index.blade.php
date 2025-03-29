@extends('layouts.plantilla')

@section('title', 'Lista de Personal')

@section('content')
    <a href="{{route('personal.create')}}">Nuevo Personal</a>
    <h1>Lista de Personal</h1>
    <ul>
        @foreach ($personals as $personal)
            <li> <a href="{{route('personal.show', $personal)}}">{{$personal->nombre}}</a> </li>
        @endforeach
    </ul>
@endsection