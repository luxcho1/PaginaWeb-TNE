@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col">
            <img src="https://oficinavirtual.tne.cl/OficinaVirtual/temas/gonce-tne/img/info_repo.png" class="img-fluid" style="max-width: 100%; height: auto;" alt="...">
        </div>
    </div>

    <div class="row" style="margin-top: 5%">
        <div class="col">
            <div class="card">
                <img src="{{ asset('images\junaeb.png') }}" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Atención</h5>
                  <p class="card-text">Al no estar afiliado con el estado no podemos realizar el procedimiento de bloqueo pero podemos mandarte a la pagina para realizar el procededimiento.</p>
                  <div class="d-grid gap-2" style="padding-top: 5%">
                    <a href="https://oficinavirtual.tne.cl/OficinaVirtual/tramites/altaSolicitud.do?codArea=TNE&id=11185" class="btn btn-primary">Continuar</a>
                  </div>
                </div>
            </div>
        </div>
    </div>






    
</div>
@endsection






    