@extends('layouts.defaultTuto')
@section('content')

<h1>A propos de MétéoFox</h1>
@auth <p>The user is authenticated... </p> @endauth
@guest <p>The user is not authenticated...</p> @endguest
<p>url de la page 'aPropos' : <a href={{route('aPropos');}}>
{{route('aPropos');}} </a></p>

@stop