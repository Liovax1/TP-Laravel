@if(Session::has('Erreur'))
  {{Session::get('Erreur')}}
@endif

<h1>liste des balises</h1>
<table>
    <thead>
        <tr>
        @foreach($nomsChamps as $nomChamp)
            <th>{!! $nomChamp !!}</th>          
        @endforeach
    </tr>
    </thead>
    <tbody>
            @foreach($balises as $balise)
            <tr>
                <td>{!! $balise->id !!}</td>  
                <td>{!! $balise->nom !!}</td>  
                <td>{!! $balise->sigfox_device !!}</td> 
                <td>{!! $balise->altitude !!}</td> 
                <td>{!! $balise->longitude !!}</td> 
                <td>{!! $balise->latitude !!}</td>   
                <td><A href = {!! url('formEditBalise') !!}/{!! $balise->id !!}> edit</A></td>       
                <td><A href = {!! url('deleteBalise') !!}/{!! $balise->id !!}> delete</A></td>  
            <td>
            @endforeach
    </tbody>
    <p><a href={!! url('formAddBalise') !!}> Ajouter une balise</a> 
</table>
    