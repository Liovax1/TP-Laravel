
<h1>Balise : {!! $baliseFind->nom !!}</h1>
<table>
    <thead>
        <tr>
        @foreach($nomsChamps as $nomChamp)
            <th>{!! $nomChamp !!}</th>          
        @endforeach
    </tr>
    </thead>
    <tbody>
            <tr>
                <td>{!! $baliseFind->id !!}</td>  
                <td>{!! $baliseFind->nom !!}</td>  
                <td>{!! $baliseFind->sigfox_device !!}</td> 
                <td>{!! $baliseFind->altitude !!}</td> 
                <td>{!! $baliseFind->longitude !!}</td> 
                <td>{!! $baliseFind->latitude !!}</td>           
            <td>
        </tbody>
</table>