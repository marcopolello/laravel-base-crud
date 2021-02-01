@extends('layouts.main-layout')
@section('section')
  <p style="font-size: 22px;"><a href="{{route('devices-index')}}">indietro</a></p>
  <h1>Prodotto Selezionato: {{$device -> id}}</h1>
  <h1>Nome prodotto: {{$device -> name}}</h1>
  <h1>Modello:{{$device -> model}}</h1>
  <h1>Prezzo:{{$device -> price}}</h1>
  <h1>Consumo:{{$device -> consumption}}</h1>

@endsection
