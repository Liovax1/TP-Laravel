<form action="{{ url('formAddBalise') }}" method="POST">
    @csrf
    <label for="nom">Nom Balise: </label>
    <input type="text" name="nom" id="nom">
    <br>
    <label for="nom">sigfox_device: </label>
    <input type="text" name="sigfox_device" id="sigfox_device">
    <br>
    <label for="nom">Latitude : </label>
    <input type="number" step="0.01" name="latitude" id="latitude">
    <br>
    <label for="nom">Longitude : </label>
    <input type="number" step="0.01" name="longitude" id="longitude">
    <br>
    <label for="nom">Altitude : </label>
    <input type="number" step="1" name="altitude" id="altitude">
    <br>
    <input type="submit" value="Envoyer !">
</form>

