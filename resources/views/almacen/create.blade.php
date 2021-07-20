
<form action="{{url('/almacen')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('almacen.form');
</form>