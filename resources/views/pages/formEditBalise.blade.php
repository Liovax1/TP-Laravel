<form action="{{ url('formEditBalise') }}" method="POST">
@csrf
<input type="hidden" id="id" name="id" value={!! $baliseFind->id !!}>
<label for="nom">Nom Balise:</label>
<input type="text" name="nom" id="nom" value={!! $baliseFind->nom !!}>
<label for="nom">sigfox_device: </label>
<input type="text" name="sigfox_device" id="sigfox_device" value={!! $baliseFind->sigfox_device !!}>
<label for="nom">Latitude : </label>
<input type ="number" step="0.1" name="latitude" id="latitude" value={!! $baliseFind->latitude !!}>
<label for="nom">Longitude : </label>
<input type ="number" step="0.1" name="longitude" id="longitude" value={!! $baliseFind->longitude !!}>
<label for="nom">Altitude : </label>
<input type ="number" step="1" name="altitude" id="altitude" value={!! $baliseFind->altitude !!}>
<input type="submit" value="Envoyer !">
</form>