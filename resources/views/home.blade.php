@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">


@section('content')
<body>
  <div class="container">
    <div class="row">
      <div class="col" style="text-align: center">
        <h5 style="text-align: center">Tomas Moreno</h5>
        <img src="https://www.colegiopedromontt.cl/wp-content/uploads/2020/04/TNE.png" alt="">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row" style="margin-bottom: 3%">
      <div class="col" >
        <div class="card" >
          <div class="card-body">
            <h6>RUN</h6>
            <h3>21.324.111-K</h3>
          </div>
        </div>
      </div>

      <div class="col" >
        <div class="card" >
          <div class="card-body">
            <h6>Institucion</h6>
            <h3>Duoc UC</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 3%">
      <div class="col" >
        <div class="card" >
          <div class="card-body">
            <h6>Saldo</h6>
            <h1>$3430</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 10%">
      <div class="col" >
        <div class="card" >
          <div class="card-body">
            <h6>Viajes restantes</h6>
            <h1>4</h1>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row" style="margin-bottom: 10%">
      <div class="col" style="text-align: center">
        <img src="{{ asset('images\qr.png') }}" alt="">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col" style="text-align: center">
        <img  class="img-fluid" src="https://pbs.twimg.com/ext_tw_video_thumb/1579160378218614786/pu/img/XPkwBLb9v29OxK46.jpg" alt="">
      </div>
    </div>
  </div>

</body>
@endsection
