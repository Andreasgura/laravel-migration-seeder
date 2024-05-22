@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($trains as $train)
                <div class="col-3">
                    <ul>
                        <li>{{ $train->company }}</li>
                        <li>Stazione di partenza: {{ $train->departure_station }}</li>
                        <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
                        <li>Orario di partenza: {{ $train->departure_time }}</li>
                        <li>Orario di arrivo: {{ $train->arrival_time }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection