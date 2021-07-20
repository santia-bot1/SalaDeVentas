<form action="{{url('/almacen'.$almacen->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('almacen.form');
</form>