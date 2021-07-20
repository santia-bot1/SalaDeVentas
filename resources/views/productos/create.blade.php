<form action="{{url('/productos')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('productos.form');
</form>