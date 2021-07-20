<input type="text" name="NombreProducto" value="{{isset($producto->nombreProducto)?$producto->nombreProducto:''}}" placeholder="NombreProducto">
    <input type="number" name="Cantidad" value="{{isset($producto->cantidad)?$producto->cantidad:''}}"} placeholder="Cantidad">
    <input type="submit" value="Guardar Datos">