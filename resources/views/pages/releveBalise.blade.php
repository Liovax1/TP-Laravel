@extends('layouts.defaultTuto')
@section('content')

<h1> Les releves de la balise {!! $balise->nom!!} </h1>
<table class="table table-dark">
    <thead>
        <tr>
            <th>horodatage</th>
            <th>temperature</th>
            <th>pression</th>
            <th>direction</th>
        </tr>
    </thead>
    <tbody>
            @foreach($releveBalise as $releveBal)
            <tr class="table-secondary">
                <td>{!! $releveBal->created_at !!}</td>
                <td>{!! $releveBal->temperature !!}</td>
                <td>{!! $releveBal->pression !!}</td>
                <td>{!! $releveBal->direction !!}</td>
            <tr>
            @endforeach
    </tbody>
</table>

@stop