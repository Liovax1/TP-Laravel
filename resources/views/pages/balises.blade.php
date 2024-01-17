@extends('layouts.defaultTuto')
@section('content')

<h1>liste des balises</h1>
<table class="table table-dark">
    <thead>
        <tr>
        @foreach($nomsChamps as $nomChamp)
            <th>{!! $nomChamp !!}</th>
        @endforeach
</tr>
</thead>
<tbody>
            @foreach($balises as $balise)
            <tr class="table-secondary">
                <td>{!! $balise->id !!}</td>
                <td>{!! $balise->nom !!}</td>
                <td>{!! $balise->sigfox_device !!}</td>
                <td>{!! $balise->altitude !!}</td>
                <td>{!! $balise->longitude !!}</td>
                <td>{!! $balise->latitude !!}</td>
            <td>
            @endforeach
</tbody>
</table>

@stop