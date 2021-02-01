@extends('layouts.main-layout')
@section('section')

  <h1><a href="{{ route('device-create') }}">CREATE NEW DEVICE</a></h1>
  
  <ul>

    @foreach ($devices as $device)

      <li>
        <a href="{{ route('device-show', $device -> id)}}">
          Id: {{$device -> id}} <br>
          Nome: {{$device -> name}} <br>
          Modello: {{$device -> model}} <br>
          Prezzo: {{$device -> price}} € <br>
          Consumo: {{$device -> consumption}} Watt
          <hr>
        </a>
      </li>

    @endforeach

  </ul>

@endsection
