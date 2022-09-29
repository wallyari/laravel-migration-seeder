@extends('layout.app')

@section('page-title', 'homepage')

@section('content')

<section class="container">   
    @foreach($trains as $train)
    <div class="card text-center mb-5">
        <div class="card-header">
            <span>Stazione di partenza:</span>
            {{$train->departure_station}}
        </div>
        <div class="card-body">
            <h5 class="card-title">Data: {{$train->departure_date}}</h5>
            <p class="card-text">Arrivo: {{$train->arrival_station}}</p>
            <a href="#" class="btn btn-danger"> NUMERO TRENO {{$train->train_code}}</a>
        </div>
        <div class="card-footer text-muted">
            CARROZZA NUMERO: {{$train->carriage_number}}
        </div>
    </div>
</section>
    @endforeach
@endsection





{{-- 'departure_station'
'arrival_station'
'departure_date'
'departure_time'
'arrival_time'
'train_code'
carriage_number' --}}
        
    
