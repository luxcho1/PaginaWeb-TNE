@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <img src="{{ asset('images\carga.png') }}" class="img-fluid w-100 d-block">
    </div>

    <div class="row" style="margin-top: 10%">
      <div class="col">
        <h4 style="text-align: start">Número de tarjeta bip! </h4>
        <input class="form-control form-control-lg" type="text" placeholder="Ej: 123456789" aria-label=".form-control-lg example">
      </div>
    </div>

    <div class="row" style="margin-top: 5%">
      <div class="col">
        <h4 style="text-align: start">Monto a cargar </h4>
        <input class="form-control form-control-lg" type="text" placeholder="$1000" aria-label=".form-control-lg example">
      </div>
    </div>

    <div class="row" style="margin-top: 5%">
      <div class="col">
        <h4 style="text-align: start">Correo Electronico </h4>
        <input class="form-control form-control-lg" type="text" placeholder="correo@mail.com" aria-label=".form-control-lg example">
      </div>
    </div>

    <div class="row" style="margin-top: 5%">
      <div class="col">
        <div class="d-grid gap-2" style="padding-top: 5%">
          <button class="btn btn-primary" type="button">Continuar</button>
          <h6>Al continuar estas aceptando nuestros términos y condiciones.</h6>
        </div>
      </div>
    </div>



















    <div class="container text-center" style="padding-top: 5%">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
            
          </div>
        </div>
        <div class="row" style="padding-top: 3%">
            <div class="col">
                
            </div>
            <div class="col">
                
            </div>
        </div>
      </div>
</div>
@endsection