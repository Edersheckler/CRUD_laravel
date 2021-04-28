<a href="{{url('usuario/create')}}">Crear Nuevo Usuario </a>
<table class="table table-light">

    <thead class="thead-light">

        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)

            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->Nombre}}</td>
                <td>{{$usuario->Apellido}}</td>
                <td>{{$usuario->email}}</td>
                <td> 
                <a href="{{ url('/usuario/'.$usuario->id.'/edit')}}">
                    Editar
                </a>
                | 

                <form action="{{ url('/usuario/'.$usuario->id)}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Desea borrar este usuario?')" value="Borrar">
                
                </form>

                </td>
            </tr>

        @endforeach
    </tbody>  
</table>