@extends('layouts.app')

@section('title', 'Flights')

@section('content')
  <div>
            @foreach($arriving_flights as $flight)
                    <p>{{ $flight->flight_number }}</p>
            @endforeach
  </div>
@endsection
