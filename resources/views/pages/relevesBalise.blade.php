
<h1> Les releves de la balise {!! $balise->nom!!} </h1>

{{-- @dump($balise)
@dump($relevesBalise) --}}
<table>
    <thead>
        <tr>
            <th>balise</th>
            <th>pression</th>
            <th>temperature</th>          
        </tr>
    </thead>
    <tbody>
            @foreach( $relevesBalise as $releveBal)
            <tr>
                <td>{!! $releveBal->temperature !!}</td>    
                <td>{!! $releveBal->pression !!}</td>  
                <td>{!! $releveBal->temperature !!}</td>  
            <td>
            @endforeach
    </tbody>
</table>
    