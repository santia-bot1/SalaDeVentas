<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('/ventas')}}">Ventas</a></li>
                <li><a href="{{url('/productos')}}">Productos</a></li>
                <li><a href="{{url('/almacen')}}">Almacen</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <ul>
            <li><a href="{{url('ventas/create')}}">Comprar Boletos</a></li>
        </ul>
        
        
                <h2>Tabla boletos</h2>
                <table class="table table-striped table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Asiento</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ventas as $venta)
                            <tr>
                                <td>{{$venta->id}}</td>
                                <td>{{$venta->cantidad}}</td>
                                <td>{{$venta->precio}}</td>
                                <td>{{$venta->asiento}}</td>
                                <td><td><a href="{{url('/ventas/'.$venta->id .'/edit')}}">
                                    Editar
                                </a>     
                                    <form action="{{url('/ventas/'.$venta->id)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" onclick="return confirm('¿Deseas Relamente borrar?')" value="Borrar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
    </main>
</body>
</html>






