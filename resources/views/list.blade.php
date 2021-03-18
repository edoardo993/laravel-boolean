@extends('mainLayout.layout')
@section('content')

    <h1 class="title">all cars</h1>

    <div class="car-cards">

        @foreach ($cars as $car)
    
            <div class="car-card">

                <div id="id">AUTO ID: {{$car['id']}}</div><br>
                <div class="car-details"><span class="bold">Marca:</span> {{ucfirst($car['marca'])}}</div>
                <div class="car-details"><span class="bold">Modello:</span> {{ucfirst($car['modello'])}}</div>
                <div class="car-details"><span class="bold">Cambio:</span> {{ucfirst($car['cambio'])}}</div>
                <div class="car-details"><span class="bold">Colore:</span> {{ucfirst($car['colore'])}}</div>
                <div class="car-details"><span class="bold">Tipologia:</span> {{ucfirst($car['tipologia'])}}</div>
                <div class="car-details"><span class="bold">Potenza:</span> {{$car['power']}}</div>

            
            </div>

        @endforeach

    </div>

@endsection