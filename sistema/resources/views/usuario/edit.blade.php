<h1>Editar Datos del usuario</h1>
<br>

<form action="{{ url('/usuario/'.$usuario->id)}}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('usuario.form')

</form>
