<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $usuario ->Nombre }}" id="Nombre">
<br>
<label for="Apellido"> Apellidos </label>
<input type="text" name="Apellido" value="{{ $usuario ->Apellido }}" id="Apellido">
<br>
<label for="email"> email </label>
<input type="text" name="email" value="{{ $usuario ->email }}" id="email">
<br>

<input type="submit" value="Guardar Datos">

<br>

<a href="{{url('usuario/')}}">Regresar a inicio</a>