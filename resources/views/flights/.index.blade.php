@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- Arriving Flights -->
<div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4 text-green-600">Arriving Flights</h2>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full">
            <thead class="bg-green-500 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Flight</th>
                    <th class="px-6 py-3 text-left">Airline</th>
                    <th class="px-6 py-3 text-left">Time</th>
                    <th class="px-6 py-3 text-left">Origin</th>
                    <th class="px-6 py-3 text-left">Terminal</th>
                    <th class="px-6 py-3 text-left">Gate</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($arriving_flights as $flight)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $flight->flight_number }}</td>
                        <td class="px-6 py-4">{{ $flight->airline }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($flight->scheduled_time)->format('H:i') }}</td>
                        <td class="px-6 py-4">{{ $flight->origin }}</td>
                        <td class="px-6 py-4">{{ $flight->terminal }}</td>
                        <td class="px-6 py-4">{{ $flight->gate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Departing Flights -->
<div>
    <h2 class="text-2xl font-semibold mb-4 text-blue-600">Departing Flights</h2>
    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Flight</th>
                    <th class="px-6 py-3 text-left">Airline</th>
                    <th class="px-6 py-3 text-left">Time</th>
                    <th class="px-6 py-3 text-left">Destination</th>
                    <th class="px-6 py-3 text-left">Terminal</th>
                    <th class="px-6 py-3 text-left">Gate</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($departing_flights as $flight)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $flight->flight_number }}</td>
                        <td class="px-6 py-4">{{ $flight->airline }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($flight->scheduled_time)->format('H:i') }}</td>
                        <td class="px-6 py-4">{{ $flight->destination }}</td>
                        <td class="px-6 py-4">{{ $flight->terminal }}</td>
                        <td class="px-6 py-4">{{ $flight->gate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection