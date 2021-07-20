<ul>
    <li><a href="{{url('/ventas')}}">Regresar</a></li>
    <li><a href="{{url('productos/create')}}">Comprar Productos</a></li>
</ul>
<h2>Tabla Productos</h2>
        <table class="table table-striped table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>NombreProducto</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombreProducto}}</td>
                        <td>{{$producto->Cantidad}}</td>
                        <td><td><a href="{{url('/productos/'.$producto->id.'/edit')}}">
                            Editar
                        </a>    
                            <form action="{{url('/productos/'.$producto->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿Deseas Relamente borrar?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>