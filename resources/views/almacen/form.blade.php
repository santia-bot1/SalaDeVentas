<input type="text" name="nombreProducto" value="{{isset($almacen->nombreProducto)?$almacen->nombreProducto:''}}" placeholder="NombreProducto">
    <input type="text" name="precio" value="{{isset($almacen->precio)?$almacen->precio:''}}" placeholder="Precio">
    <input type="text" name="iva" value="{{isset($almacen->iva)?$almacen->iva:''}}" placeholder="Iva">
    <input type="number" name="cantidad" value="{{isset($almacen->cantidad)?$almacen->cantidad:''}}" placeholder="Cantidad">

    <input type="submit" value="Guardar Datos">