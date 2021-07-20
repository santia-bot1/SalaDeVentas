<form action="{{url('/ventas'.$ventas->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('ventas.form')
</form>