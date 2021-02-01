@extends('layouts.main-layout')
@section('section')

  <form action="{{ route('device-store')  }}" method="post">
    @csrf
    @method('post')
    <label for="name">Nome: </label>
    <input type="text" name="name">
    <br>
    <label for="model">Modello: </label>
    <input type="text" name="model">
    <br>
    <label for="price">Prezzo: </label>
    <input type="text" name="price">
    <br>
    <label for="consumption">Consumo: </label>
    <input type="text" name="consumption">
    <hr>
    <input type="submit" value="Salva Nuovo Device">
    <hr>
  </form>

@endsection
