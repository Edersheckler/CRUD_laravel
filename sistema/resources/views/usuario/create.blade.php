<h1>Registrar Usuarios</h1>
<br>
<form action="{{ url('/usuario') }}" method="post">
@csrf
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre"  id="Nombre">
<br>
<label for="Apellido"> Apellidos </label>
<input type="text" name="Apellido" id="Apellido">
<br>
<label for="email"> email </label>
<input type="text" name="email" id="email">
<br>

<input type="submit" value="Guardar Datos">

<br>
</form>