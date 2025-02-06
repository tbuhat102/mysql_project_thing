@extends('layouts.app')

@section('title', 'Flights')

@section('content')
<div>
    <h2>Arriving Flights</h2>
    <div>
        <table>
            <thead>
                <tr>
                <!-- thead section -->
                </tr>
            </thead>
            <tbody>
            <!-- start for each -->
                    <tr>
                        <td></td>
                    </tr>
            <!-- end for each -->
            </tbody>
        </table>
    </div>
</div>

<!-- Departing Flights -->
<div>
    <h2 class="text-2xl font-semibold mb-4 text-blue-600">Departing Flights</h2>
    <div>
        <table>
            <thead>
                <tr>
                <!-- thead section -->
                 <th>Lorem</th>
                </tr>
            </thead>
            <tbody>
            <!-- start for each -->
                    <tr>
                        <td>Ipsum</td>
                    </tr>
            <!-- end for each -->
            </tbody>
        </table>
    </div>
</div>
@endsection
