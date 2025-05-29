@extends('layout')

@section('title', 'Talleres')

@section('content')
    <h2>Talleres</h2>
    <ul>
        @foreach($talleres as $taller)
            <li>{{ $taller }}</li>
        @endforeach
    </ul>
@endsection