<form action="{{ url('formEditBalise') }}" method="POST">
    @csrf
    <input type="hidden" id="id" name="id" value={!! $baliseFind->id !!}>
    <input type="hidden" id="sigfox_device_old" name="sigfox_device_old" value={!! $baliseFind->sigfox_device !!}>

    <label for="nom">Nom Balise: </label>
    <input type="text" name="nom" id="nom" value={!! $baliseFind->nom !!}>
    
    <br>
    <label for="nom">sigfox_device: </label>
    <input type="text" name="sigfox_device" id="sigfox_device" value={!! $baliseFind->sigfox_device !!}>
    <br>
    <label for="nom">Latitude : </label>
    <input type="number" step="0.1" name="latitude" id="latitude" value={!! $baliseFind->latitude !!}>
    <br>
    <label for="nom">Longitude : </label>
    <input type="number" step="0.1" name="longitude" id="longitude" value={!! $baliseFind->longitude !!}>
    <br>
    <label for="nom">Altitude : </label>
    <input type="number" step="1" name="altitude" id="altitude" value={!! $baliseFind->altitude !!}>
    <br>
    <input type="submit" value="Envoyer !">
</form>
