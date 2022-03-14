@extends('template.base')
@section('section')
    <h1>{{$quartier->nom}}</h1>
    @foreach($quartier->entreprises as $entreprise)
            <h2>{{$entreprise->nom}}</h2>
    @endforeach
@endsection