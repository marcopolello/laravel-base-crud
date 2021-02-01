<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// necessario dire che sto usando app\modello Device per poi usarlo nel method
use App\Device;

class MainController extends Controller
{
  public function index(){
    // assegno ad una variabile tutto ciò che chiamo con funzione all dal modello Device.php
    $devices = Device::all();
    //dd($devices);
    return view('pages.devices', compact('devices')); //compact per trasformare array speciale in array con variabili contenuto e i loro valori;
  }
  public function show($id){
    //dd($id);
    $device = Device::findOrFail($id);
    return view('pages.device', compact('device'));
  }
  // metodo per creare una nuova entità, un nuovo prodotto elettrico nel caso di questo proj
  public function create() {
    return view('pages.device-create');
  }
  // metodo per salvare il device creato
  public function store(Request $request) {
    Device::create($request -> all());
    return redirect() -> route('devices-index');
  }
}
