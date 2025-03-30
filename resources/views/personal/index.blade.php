@extends('layouts.plantilla')

@section('title', 'Lista de Personal')

@section('content')
    <h1>Lista de Personal</h1>
    <a href="{{route('personal.create')}}">Nuevo Personal</a>
    <ul>
        @foreach ($personals as $personal)
            <li> <a href="{{route('personal.show', $personal)}}">{{$personal->nombre}}</a> </li>
        @endforeach
    </ul>
@endsection