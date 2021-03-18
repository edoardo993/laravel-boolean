@extends('mainLayout.layout')
@section('content')

    <div class="container">

        <h1 class="title">choosen car</h1>

        <div class="car-info">

            <span id="id">ID AUTO: {{$cars[$id]->id}}</span><br><br>
            <span class="car-details"><span class="bold">Marca:</span> {{ucfirst($cars[$id]->marca)}}</span><br>
            <span class="car-details"><span class="bold">Modello:</span> {{ucfirst($cars[$id]->modello)}}</span><br>
            <span class="car-details"><span class="bold">Cambio:</span> {{ucfirst($cars[$id]->cambio)}}</span><br>
            <span class="car-details"><span class="bold">Colore:</span> {{ucfirst($cars[$id]->colore)}}</span><br>
            <span class="car-details"><span class="bold">Tipologia:</span> {{ucfirst($cars[$id]->tipologia)}}</span><br>
            <span class="car-details"><span class="bold">Potenza:</span> {{$cars[$id]->power}}</span><br>

        </div>

    </div>

@endsection