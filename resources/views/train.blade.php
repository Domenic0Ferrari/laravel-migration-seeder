@extends('layouts.base')

@section('contents')
    <h2>I nostri treni</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione sapiente error veniam minus sit voluptas modi odit veritatis, mollitia non dolores doloremque asperiores ducimus vitae assumenda est vel id cupiditate.</p>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-4">
                <div class="card">
                    <ul>
                        <li>{{ $train->company }}</li>
                        <li>{{ $train->departure_station }}</li>
                        <li>{{ $train->arrival_station }}</li>
                        <li>{{ $train->train_code }}</li>
                        <li>{{ $train->train_cars}}</li>
                    </ul>  
                </div>
            </div>
            @endforeach
        </div>
    </div>
   
@endsection