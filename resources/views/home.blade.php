@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
    @foreach($trains as $train)
    <div class="col">
      <div class="card h-100 ">
        <h2>{{$train->azienda}}</h2>
        <ul>
          <li>{{$train->stazione_di_partenza}}</li>
          <li>{{$train->orario_di_partenza}}</li>
          <li>{{$train->orario_di_arrivo}}</li>
          <li>{{$train->codice_treno}}</li>
          <li>{{$train->numero_carozze}}</li>
          <li>{{$train->in_orario}}</li>
          <li>{{$train->cancellato}}</li>
        </ul>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection