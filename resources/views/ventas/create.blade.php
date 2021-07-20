
<form action="{{url('/ventas')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('ventas.form');
</form>