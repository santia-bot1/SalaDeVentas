<form action="{{url('/productos'.$productos->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('productos.form')
</form>