@extends('layout')

@section('title', $taller)

@section('content')
    <h1>Taller de {{ $taller }}</h1>
    <p>Detalles del taller de {{ $taller }}.</p>
    <a href="{{ route('talleres') }}">Volver a Talleres</a>
@endsection