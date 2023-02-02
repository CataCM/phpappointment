@extends('layout')

@section('content')
<table>
    <thead>
        <tr>
            <th>Appointment</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->appointment }}</td>
                <td>{{ $appointment->selected_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
