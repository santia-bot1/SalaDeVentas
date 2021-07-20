<ul>
    <li><a href="{{url('/ventas')}}">Regresar</a></li>
    <li><a href="{{url('almacen/create')}}">Comprar Productos</a></li>
</ul>
<h2>Tabla Productos</h2>
        <table class="table table-striped table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>NombreProducto</th>
                    <th>Precio</th>
                    <th>Iva</th>
                    <th>Cantidad</th>
                    
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($almacenes as $almacen)
                    <tr>
                        <td>{{$almacen->id}}</td>
                        <td>{{$almacen->nombreProducto}}</td>
                        <td>{{$almacen->precio}}</td>
                        <td>{{$almacen->iva}}</td>
                        <td>{{$almacen->cantidad}}</td>
                        <td><a href="{{url('/almacen/'.$almacen->id.'/edit')}}">
                            Editar
                        </a>      
                            <form action="{{url('/almacen/'.$almacen->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <input type="submit" onclick="return confirm('¿Deseas Relamente borrar?')" value="Borrar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>