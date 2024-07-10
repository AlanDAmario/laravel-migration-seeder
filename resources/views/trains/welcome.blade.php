@extends('layouts.app')

@section('main')
    @foreach ($trains as $train)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $train->company }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->departure_station }}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->arrival_station }}</h6>

            </div>
        </div>
    @endforeach
@endsection
